<?php


namespace BaseLinkerNts\Service\Nts;


use BaseLinkerNts\Enum\AllegroDeliveryMethod;
use BaseLinkerNts\Enum\AllegroPaymentMethod;
use BaseLinkerNts\Enum\EmpikDeliveryMethod;
use BaseLinkerNts\Enum\EmpikPaymentMethod;
use BaseLinkerNts\Enum\NtsOrderPaymentCode;
use BaseLinkerNts\Enum\NtsOrderShippingCode;
use BaseLinkerNts\Enum\NtsResponseCode;
use BaseLinkerNts\Enum\NtsShopId;
use BaseLinkerNts\Log\AppLogger;
use BaseLinkerNts\Model\BaseLinker\Order;
use BaseLinkerNts\Model\BaseLinker\OrderProduct;
use BaseLinkerNts\Model\Nts\Clients;
use BaseLinkerNts\Model\Nts\ClientSearchParamsType;
use BaseLinkerNts\Model\Nts\CompanyDataType;
use BaseLinkerNts\Model\Nts\CustomerAddressType;
use BaseLinkerNts\Model\Nts\CustomerDataType;
use BaseLinkerNts\Model\Nts\CustomerInformationType;
use BaseLinkerNts\Model\Nts\DeliveryAddressType;
use BaseLinkerNts\Model\Nts\InvoiceDataType;
use BaseLinkerNts\Model\Nts\ItemType;
use BaseLinkerNts\Model\Nts\OrderDataType;
use BaseLinkerNts\Model\Nts\OrderElementsType;
use BaseLinkerNts\Model\Nts\Response;
use BaseLinkerNts\Model\Nts\SalesOrder;
use BaseLinkerNts\Model\Nts\ShippingType;
use BaseLinkerNts\Utils\Format;
use Monolog\Logger;
use SoapFault;


class NtsOrderManager
{
    private NtsOrderWebService $ntsOrderWebService;
    private Logger $logger;

    /**
     * NtsOrderManager constructor.
     * @param Logger $logger
     * @param NtsOrderWebService $ntsOrderWebService
     */
    public function __construct(NtsOrderWebService $ntsOrderWebService, Logger $logger)
    {
        $this->ntsOrderWebService = $ntsOrderWebService;
        $this->logger = $logger;
    }

    /**
     * @param string $email
     * @return string
     */
    public function searchClient(string $email): string
    {
        $params = new ClientSearchParamsType();
        $params->setCustomerEmail($email);
        $clients = new Clients($params);
        try {
            $clientsResponse = $this->ntsOrderWebService->clients($clients);
            if (NtsResponseCode::Success === $clientsResponse->getResponseCode()) {
                $client = $clientsResponse->getCustomer();
                if ($client) {
                    $firstCustomerInfo = is_array($client) ? $client[0]->getCustomerInfo() : $client->getCustomerInfo();
                    return null !== $firstCustomerInfo ? $firstCustomerInfo->getCustomerCode() : "";
                }
            }
            return "";
        } catch (SoapFault $exception) {
            $this->logger->error($exception->getMessage());
            $this->logger->log(AppLogger::REQUEST, $this->ntsOrderWebService->__getLastRequest());
            return "";
        }
    }

    /**
     * @param Order $blOrder - data from BaseLinker
     * @param string $versionSuffix - v2, v3 etc..., the suffix is added to the nts id.
     * @param string $pin - Authorization PIN number, used e.g. when paying "on delivery".
     * @param bool $sendToTest - set true when u can send order to test server
     * @return Response|null
     */
    public function sendOrder(
        Order $blOrder,
        string $customerCode = "",
        string $pin = "",
        string $versionSuffix = "",
        bool $sendToTest = false
    ): ?Response {
        if ($sendToTest) {
            $this->ntsOrderWebService->setAuthentication(
                $_ENV['NTS_TEST_LOGIN'],
                $_ENV['NTS_TEST_PASSWORD'],
                $sendToTest
            );
        }
        $deliveryFullName = str_replace("  ", " ", $blOrder->getDeliveryFullname());
        [$firstName, $lastName] = explode(" ", $deliveryFullName);

        $addressDelivery = new DeliveryAddressType();
        $addressDelivery->setDeliveryFname($firstName);
        $addressDelivery->setDeliveryLname($lastName);

        $customerAddress = new CustomerAddressType();
        $customerAddress->setEmail($blOrder->getEmail());
        $customerAddress->setStreet($blOrder->getDeliveryAddress());
        $customerAddress->setCity($blOrder->getDeliveryCity());
        $customerAddress->setZip($blOrder->getDeliveryPostcode());
        $customerAddress->setMobilePhone(Format::phone($blOrder->getPhone()));
        $customerAddress->setPhone(Format::phone($blOrder->getPhone()));
        $customerAddress->setCountryCode($blOrder->getDeliveryCountryCode());

        $addressDelivery->setDeliveryAddress($customerAddress);

        $addressDelivery->setPickupNo($blOrder->getDeliveryPointId());
        $addressDelivery->setPickupName($blOrder->getDeliveryPointName());

        $customerInfo = new CustomerInformationType();
        $customerInfo->setCustomerCode($customerCode);
        $customerInfo->setCustomerFname($firstName);
        $customerInfo->setCustomerLname($lastName);

        $customerData = new CustomerDataType();
        $customerData->setCustomerInfo($customerInfo);
        $customerData->setCustomerAddress(clone $customerAddress);

        $invoiceData = null;
        if ("empik" === $blOrder->getOrderSource()
            || ("1" === $blOrder->getWantInvoice() || ("" !== $blOrder->getInvoiceCompany(
                    ) && "" !== $blOrder->getInvoiceNip()))) {
            if ("" !== $blOrder->getInvoiceFullname()) {
                $invoiceFullName = str_replace("  ", " ", $blOrder->getInvoiceFullname());
                [$invFirstName, $invLastName] = explode(" ", $invoiceFullName);
            }

            $invoiceData = new InvoiceDataType();

            $invoiceData->setCustomerFname($invFirstName ?? "");
            $invoiceData->setCustomerLname($invLastName ?? "");

            $companyDataType = new CompanyDataType();
            $companyDataType->setCompanyCountryCode($blOrder->getInvoiceCountryCode());
            $companyDataType->setCompanyName($blOrder->getInvoiceCompany() ?? "");
            $companyDataType->setCompanyNip($blOrder->getInvoiceNip() ?? "");

            $invoiceData->setCompanyData($companyDataType);

            $invoiceAddress = new CustomerAddressType();
            $invoiceAddress->setEmail($blOrder->getEmail());
            $invoiceAddress->setStreet($blOrder->getInvoiceAddress());
            $invoiceAddress->setCity($blOrder->getInvoiceCity());
            $invoiceAddress->setZip($blOrder->getInvoicePostcode());
            $invoiceAddress->setMobilePhone(Format::phone($blOrder->getPhone()));
            $invoiceAddress->setPhone(Format::phone($blOrder->getPhone()));
            $invoiceAddress->setCountryCode($blOrder->getInvoiceCountryCode());

            $invoiceData->setInvoiceAddress($invoiceAddress);

            $customerData->setCompanyData(clone $companyDataType);
        }

        $orderData = new OrderDataType();
        $orderData->setDeliveryShopNo($sendToTest ? NtsShopId::TEST_SHOP : NtsShopId::ONLINE_SHOP);
        $orderData->setOrdPaymentConfirmed("Y");
        $orderData->setOrdRealizationConfirmed("Y");

        if (null !== $invoiceData) {
            $orderData->setInvoiceData($invoiceData);
        }

        $orderData->setCustomerData($customerData);
        $orderData->setDeliveryAddress($addressDelivery);
        $orderData->setDeliveryAddress($addressDelivery);

        $orderData->setShipping(
            $this->getShippingType(
                $blOrder->getDeliveryMethod(),
                23,
                $blOrder->getDeliveryPrice(),
                $blOrder->getOrderSource(),
                $blOrder->getDeliveryPrice() === 0.0
            )
        );
        $orderData->setOrdPaymentCode(
            $this->getPaymentCodeByPaymentMethod(
                $blOrder->getPaymentMethod(),
                $blOrder->getOrderSource(),
                $blOrder->getDeliveryMethod()
            )
        );
        $orderData->setOrdNote($blOrder->getExternalOrderId());
        $orderData->setOrdInvoiceTypeCode("PR");
        $orderData->setOrdPin($pin);

        $products = $this->getProductList($blOrder->getProducts());
        $orderElements = new OrderElementsType();
        $orderElements->setItem($products);

        $orderData->setOrderElements($orderElements);

        $salesOrder = new SalesOrder();
        $orderId = $blOrder->getOrderSource()
            . "_"
            . $blOrder->getOrderId()
            . ($versionSuffix !== "" ? "_" . $versionSuffix : "");

        $salesOrder->setOrdId($orderId);
        $salesOrder->setShopNo("");
        $salesOrder->setOrdType("R");
        $salesOrder->setOrderData($orderData);

        try {
            return $this->ntsOrderWebService->salesOrder($salesOrder);
        } catch (SoapFault $exception) {
            $this->logger->error($exception->getMessage());
            $this->logger->log(AppLogger::REQUEST, $this->ntsOrderWebService->__getLastRequest());
            return null;
        }
    }

    public function getLastRequest(): string
    {
        return $this->ntsOrderWebService->__getLastRequest();
    }

    /**
     * @param OrderProduct[] $products
     * @return ItemType[]
     */
    private function getProductList(array $products): array
    {
        $result = [];
        foreach ($products as $product) {
            $newProduct = new ItemType();
            $newProduct->setDeliveryType("01");
            $newProduct->setAmount($product->getQuantity());
            $newProduct->setItemCode($product->getSku());
            $newProduct->setPriceGross($product->getPriceBrutto());
            $newProduct->setPrice(null);
            $newProduct->setVatRate($product->getTaxRate());
            $result[] = $newProduct;
        }
        return $result;
    }

    /**
     * @param string $deliveryMethod
     * @param int $shippingTaxRate
     * @param float $totalShippingTaxIncl
     * @param string $source
     * @param bool $isFreeShipping
     * @return ShippingType
     */
    private function getShippingType(
        string $deliveryMethod,
        int $shippingTaxRate,
        float $totalShippingTaxIncl,
        string $source,
        bool $isFreeShipping = false
    ): ShippingType {
        $shoppingType = new ShippingType();
        $shoppingType->setOrdShippingDeliveryType("01");
        if (!$isFreeShipping) {
            $shoppingType->setOrdShippingCode($this->getShippingCodeByDeliveryMethod($deliveryMethod, $source));
            $shoppingType->setOrdShippingPrice(null);
            $shoppingType->setOrdShippingPriceGross($totalShippingTaxIncl);
            $shoppingType->setOrdShippingVatRate($shippingTaxRate);
        }

        return $shoppingType;
    }

    /**
     * @param string $paymentMethod
     * @param string $source variable from bl response. empik or allegro
     * @param string $deliveryMethod
     * @return string
     */
    private function getPaymentCodeByPaymentMethod(
        string $paymentMethod,
        string $source,
        string $deliveryMethod
    ): string {
        if ("empik" === $source) {
            switch ($paymentMethod) {
                case EmpikPaymentMethod::PAYMENT_IN_ADVANCE:
                    return NtsOrderPaymentCode::DOTPAY_EMP;
                case EmpikPaymentMethod::PAYMENT_CACHE_ON_DELIVERY:
                    return NtsOrderPaymentCode::POBRANIE_INPOST;
                default:
                    $this->logger->error("Nts create order: missing payment method.");
                    return "";
            }
        }
        if ("allegro" === $source) {
            switch ($paymentMethod) {
                case AllegroPaymentMethod::PPO:
                    if ($deliveryMethod === AllegroDeliveryMethod::KInPostP) {
                        return NtsOrderPaymentCode::POBRANIE_INPOST;
                    }
                    if ($deliveryMethod === AllegroDeliveryMethod::PocztexKurierPobranie) {
                        return NtsOrderPaymentCode::POCZTEX;
                    }
                    return NtsOrderPaymentCode::POBRANIE_GOTOWKOWE;
                case AllegroPaymentMethod::PayU:
                    return NtsOrderPaymentCode::PAYU_ALLEGRO;
                case AllegroPaymentMethod::P24:
                    return NtsOrderPaymentCode::PRZELEWY_ALLEGRO;
                default:
                    $this->logger->error("Nts create order: missing payment method.");
                    return "";
            }
        }
        $this->logger->error("Nts create order: missing payment method and source.");
        return "";
    }

    /**
     * @param string $deliveryMethod
     * @param string $source variable from bl response. empik or allegro
     * @param bool $isFreeShipping
     * @return string
     */
    private function getShippingCodeByDeliveryMethod(
        string $deliveryMethod,
        string $source,
        bool $isFreeShipping = false
    ): string {
        if ("empik" === $source) {
            switch ($deliveryMethod) {
                case EmpikDeliveryMethod::INPOST_PACZKOMAT:
                    return NtsOrderShippingCode::INPOST_PACZKOMAT;
                case EmpikDeliveryMethod::INPOST_KURIER:
                    return NtsOrderShippingCode::INPOST_KURIER;
                case EmpikDeliveryMethod::INPOST_KURIER_POBRANIE:
                    return $isFreeShipping ? NtsOrderShippingCode::INPOST_KURIER_POBRANIE_DARMOWA : NtsOrderShippingCode::INPOST_KURIER_POBRANIE;
                case EmpikDeliveryMethod::POCZTEX_POBRANIE:
                    return $isFreeShipping ? NtsOrderShippingCode::POCZTEX_POBRANIE : NtsOrderShippingCode::POCZTEX_POBRANIE_DARMOWE;
                case EmpikDeliveryMethod::POCZTEX:
                    return NtsOrderShippingCode::POCZTEX;
                default:
                    $this->logger->error("Nts create order: missing delivery method.");
                    return "";
            }
        }

        if ("allegro" === $source) {
            switch ($deliveryMethod) {
                case AllegroDeliveryMethod::APInPost:
                    return NtsOrderShippingCode::INPOST_PACZKOMAT;
                case AllegroDeliveryMethod::KDhl:
                    return NtsOrderShippingCode::DHL;
                case AllegroDeliveryMethod::KDhlP:
                    return $isFreeShipping ? NtsOrderShippingCode::DHL_POBRANIE_DARMOWA : NtsOrderShippingCode::DHL_POBRANIE;
                case AllegroDeliveryMethod::KInPost:
                    return NtsOrderShippingCode::INPOST_KURIER;
                case AllegroDeliveryMethod::KInPostP:
                    return $isFreeShipping ? NtsOrderShippingCode::INPOST_KURIER_POBRANIE_DARMOWA : NtsOrderShippingCode::INPOST_KURIER_POBRANIE;
                case AllegroDeliveryMethod::PocztexKurier:
                    return NtsOrderShippingCode::POCZTEX;
                case AllegroDeliveryMethod::PocztexKurierPobranie:
                    return $isFreeShipping ? NtsOrderShippingCode::POCZTEX_POBRANIE_DARMOWE : NtsOrderShippingCode::POCZTEX_POBRANIE;
                case AllegroDeliveryMethod::AllegroKurierDpD:
                    return NtsOrderShippingCode::KURIER_DPD;
                default:
                    $this->logger->error("Nts create order: missing delivery method.");
                    return "";
            }
        }

        $this->logger->error("Nts create order: missing delivery method and source.");
        return "";
    }
}