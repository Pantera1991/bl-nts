<?php

namespace BaseLinkerNts\Model\Nts;

use DateTime;

class OrderDataType
{

    /**
     * @var string $ord_payment_code
     */
    protected string $ord_payment_code;

    /**
     * @var string $ord_payment_confirmed
     */
    protected string $ord_payment_confirmed;

    /**
     * @var string $ord_realization_confirmed
     */
    protected string $ord_realization_confirmed;

    /**
     * @var string $ord_invoice_type_code
     */
    protected string $ord_invoice_type_code;

    /**
     * @var string $ord_note
     */
    protected string $ord_note;

    /**
     * @var string $ord_pin
     */
    protected string $ord_pin;

    /**
     * @var DateTime $ord_realization_date
     */
    protected DateTime $ord_realization_date;

    /**
     * @var ShippingType $shipping
     */
    protected ShippingType $shipping;

    /**
     * @var DeliveryAddressType $deliveryAddress
     */
    protected DeliveryAddressType $deliveryAddress;

    /**
     * @var string $delivery_shop_no
     */
    protected string $delivery_shop_no;

    /**
     * @var CustomerDataType $customerData
     */
    protected CustomerDataType $customerData;

    /**
     * @var OrderElementsType $orderElements
     */
    protected OrderElementsType $orderElements;

    /**
     * @var InvoiceDataType $invoiceData
     */
    protected InvoiceDataType $invoiceData;

    /**
     * @return string
     */
    public function getOrdPaymentCode(): string
    {
        return $this->ord_payment_code;
    }

    /**
     * @param string $ord_payment_code
     */
    public function setOrdPaymentCode(string $ord_payment_code): void
    {
        $this->ord_payment_code = $ord_payment_code;
    }

    /**
     * @return string
     */
    public function getOrdPaymentConfirmed(): string
    {
        return $this->ord_payment_confirmed;
    }

    /**
     * @param string $ord_payment_confirmed
     */
    public function setOrdPaymentConfirmed(string $ord_payment_confirmed): void
    {
        $this->ord_payment_confirmed = $ord_payment_confirmed;
    }

    /**
     * @return string
     */
    public function getOrdRealizationConfirmed(): string
    {
        return $this->ord_realization_confirmed;
    }

    /**
     * @param string $ord_realization_confirmed
     */
    public function setOrdRealizationConfirmed(string $ord_realization_confirmed): void
    {
        $this->ord_realization_confirmed = $ord_realization_confirmed;
    }

    /**
     * @return string
     */
    public function getOrdInvoiceTypeCode(): string
    {
        return $this->ord_invoice_type_code;
    }

    /**
     * @param string $ord_invoice_type_code
     */
    public function setOrdInvoiceTypeCode(string $ord_invoice_type_code): void
    {
        $this->ord_invoice_type_code = $ord_invoice_type_code;
    }

    /**
     * @return string
     */
    public function getOrdNote(): string
    {
        return $this->ord_note;
    }

    /**
     * @param string $ord_note
     */
    public function setOrdNote(string $ord_note): void
    {
        $this->ord_note = $ord_note;
    }

    /**
     * @return string
     */
    public function getOrdPin(): string
    {
        return $this->ord_pin;
    }

    /**
     * @param string $ord_pin
     */
    public function setOrdPin(string $ord_pin): void
    {
        $this->ord_pin = $ord_pin;
    }

    /**
     * @return DateTime
     */
    public function getOrdRealizationDate(): DateTime
    {
        return $this->ord_realization_date;
    }

    /**
     * @param DateTime $ord_realization_date
     */
    public function setOrdRealizationDate(DateTime $ord_realization_date): void
    {
        $this->ord_realization_date = $ord_realization_date;
    }

    /**
     * @return ShippingType
     */
    public function getShipping(): ShippingType
    {
        return $this->shipping;
    }

    /**
     * @param ShippingType $shipping
     */
    public function setShipping(ShippingType $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * @return DeliveryAddressType
     */
    public function getDeliveryAddress(): DeliveryAddressType
    {
        return $this->deliveryAddress;
    }

    /**
     * @param DeliveryAddressType $deliveryAddress
     */
    public function setDeliveryAddress(DeliveryAddressType $deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return string
     */
    public function getDeliveryShopNo(): string
    {
        return $this->delivery_shop_no;
    }

    /**
     * @param string $delivery_shop_no
     */
    public function setDeliveryShopNo(string $delivery_shop_no): void
    {
        $this->delivery_shop_no = $delivery_shop_no;
    }

    /**
     * @return CustomerDataType
     */
    public function getCustomerData(): CustomerDataType
    {
        return $this->customerData;
    }

    /**
     * @param CustomerDataType $customerData
     */
    public function setCustomerData(CustomerDataType $customerData): void
    {
        $this->customerData = $customerData;
    }

    /**
     * @return OrderElementsType
     */
    public function getOrderElements(): OrderElementsType
    {
        return $this->orderElements;
    }

    /**
     * @param OrderElementsType $orderElements
     */
    public function setOrderElements(OrderElementsType $orderElements): void
    {
        $this->orderElements = $orderElements;
    }

    /**
     * @return InvoiceDataType
     */
    public function getInvoiceData(): InvoiceDataType
    {
        return $this->invoiceData;
    }

    /**
     * @param InvoiceDataType $invoiceData
     */
    public function setInvoiceData(InvoiceDataType $invoiceData): void
    {
        $this->invoiceData = $invoiceData;
    }

}
