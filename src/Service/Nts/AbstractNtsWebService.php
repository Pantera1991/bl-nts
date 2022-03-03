<?php


namespace BaseLinkerNts\Service\Nts;


use BaseLinkerNts\Model\Nts\AddVoucherInfo;
use BaseLinkerNts\Model\Nts\AddVoucherInfoResponse;
use BaseLinkerNts\Model\Nts\AttributesType;
use BaseLinkerNts\Model\Nts\AttributeType;
use BaseLinkerNts\Model\Nts\ClientCreate;
use BaseLinkerNts\Model\Nts\ClientCreateResponse;
use BaseLinkerNts\Model\Nts\Clients;
use BaseLinkerNts\Model\Nts\ClientSearchParamsType;
use BaseLinkerNts\Model\Nts\ClientsResponse;
use BaseLinkerNts\Model\Nts\ClientsUpdate;
use BaseLinkerNts\Model\Nts\ClientsUpdateResponse;
use BaseLinkerNts\Model\Nts\CompanyDataType;
use BaseLinkerNts\Model\Nts\CustomerAddressType;
use BaseLinkerNts\Model\Nts\CustomerDataType;
use BaseLinkerNts\Model\Nts\CustomerInformationType;
use BaseLinkerNts\Model\Nts\DeliveryAddressType;
use BaseLinkerNts\Model\Nts\DynamicFieldsType;
use BaseLinkerNts\Model\Nts\DynFieldType;
use BaseLinkerNts\Model\Nts\ElementsType;
use BaseLinkerNts\Model\Nts\Hello;
use BaseLinkerNts\Model\Nts\HelloResponse;
use BaseLinkerNts\Model\Nts\InvoiceDataType;
use BaseLinkerNts\Model\Nts\ItemType;
use BaseLinkerNts\Model\Nts\OrderDataType;
use BaseLinkerNts\Model\Nts\OrderElementsType;
use BaseLinkerNts\Model\Nts\Product;
use BaseLinkerNts\Model\Nts\ProductAttributes;
use BaseLinkerNts\Model\Nts\Products;
use BaseLinkerNts\Model\Nts\ProductSign;
use BaseLinkerNts\Model\Nts\ProductsResponse;
use BaseLinkerNts\Model\Nts\RegisterVoucher;
use BaseLinkerNts\Model\Nts\RegisterVoucherResponse;
use BaseLinkerNts\Model\Nts\Response;
use BaseLinkerNts\Model\Nts\ResponseItemType;
use BaseLinkerNts\Model\Nts\ResultType;
use BaseLinkerNts\Model\Nts\SalesOrder;
use BaseLinkerNts\Model\Nts\SalesOrderConfirm;
use BaseLinkerNts\Model\Nts\SalesOrderStatus;
use BaseLinkerNts\Model\Nts\SearchParamsType;
use BaseLinkerNts\Model\Nts\ShippingType;
use BaseLinkerNts\Model\Nts\ShopLevel;
use BaseLinkerNts\Model\Nts\ShopLevelItem;
use BaseLinkerNts\Model\Nts\ShopLevels;
use BaseLinkerNts\Model\Nts\ShopLevelsResponse;
use BaseLinkerNts\Model\Nts\StatusResponse;
use BaseLinkerNts\Model\Nts\StatusResultType;
use BaseLinkerNts\Model\Nts\StockLevel;
use BaseLinkerNts\Model\Nts\StockLevels;
use BaseLinkerNts\Model\Nts\StockLevelsResponse;
use BaseLinkerNts\Model\Nts\VoucherDetail;
use BaseLinkerNts\Model\Nts\VoucherDetailsType;
use BaseLinkerNts\Model\Nts\VoucherHeader;
use BaseLinkerNts\Model\Nts\VoucherInfo;
use BaseLinkerNts\Model\Nts\VoucherInformationType;
use BaseLinkerNts\Model\Nts\VoucherType;
use SoapClient;

abstract class AbstractNtsWebService extends SoapClient
{
    protected const WSDL_PRODUCTION = '../wsdl/OrderWebService_C04_v3.7z.wsdl';
    protected const WSDL_TEST = '../wsdl/OrderWebService_C04_v3.7z_test.wsdl';

    private static array $classmap = [
        'StatusResultType' => StatusResultType::class,
        'ResultType' => ResultType::class,
        'ElementsType' => ElementsType::class,
        'ResponseItemType' => ResponseItemType::class,
        'OrderDataType' => OrderDataType::class,
        'ShippingType' => ShippingType::class,
        'DeliveryAddressType' => DeliveryAddressType::class,
        'OrderElementsType' => OrderElementsType::class,
        'ItemType' => ItemType::class,
        'CustomerDataType' => CustomerDataType::class,
        'CustomerInformationType' => CustomerInformationType::class,
        'DynamicFieldsType' => DynamicFieldsType::class,
        'DynFieldType' => DynFieldType::class,
        'CompanyDataType' => CompanyDataType::class,
        'CustomerAddressType' => CustomerAddressType::class,
        'InvoiceDataType' => InvoiceDataType::class,
        'AttributesType' => AttributesType::class,
        'AttributeType' => AttributeType::class,
        'salesOrder' => SalesOrder::class,
        'salesOrderConfirm' => SalesOrderConfirm::class,
        'salesOrderStatus' => SalesOrderStatus::class,
        'response' => Response::class,
        'statusResponse' => StatusResponse::class,
        'hello' => Hello::class,
        'helloResponse' => HelloResponse::class,
        'stockLevels' => StockLevels::class,
        'stockLevelsResponse' => StockLevelsResponse::class,
        'SearchParamsType' => SearchParamsType::class,
        'StockLevel' => StockLevel::class,
        'ShopLevel' => ShopLevel::class,
        'products' => Products::class,
        'productsResponse' => ProductsResponse::class,
        'OrderProduct' => Product::class,
        'ProductAttributes' => ProductAttributes::class,
        'ProductSign' => ProductSign::class,
        'clients' => Clients::class,
        'clientsResponse' => ClientsResponse::class,
        'ClientSearchParamsType' => ClientSearchParamsType::class,
        'clientsUpdate' => ClientsUpdate::class,
        'clientsUpdateResponse' => ClientsUpdateResponse::class,
        'shopLevels' => ShopLevels::class,
        'shopLevelsResponse' => ShopLevelsResponse::class,
        'ShopLevelItem' => ShopLevelItem::class,
        'clientCreate' => ClientCreate::class,
        'clientCreateResponse' => ClientCreateResponse::class,
        'registerVoucher' => RegisterVoucher::class,
        'registerVoucherResponse' => RegisterVoucherResponse::class,
        'VoucherType' => VoucherType::class,
        'VoucherHeader' => VoucherHeader::class,
        'VoucherDetailsType' => VoucherDetailsType::class,
        'VoucherDetail' => VoucherDetail::class,
        'addVoucherInfo' => AddVoucherInfo::class,
        'VoucherInformationType' => VoucherInformationType::class,
        'VoucherInfo' => VoucherInfo::class,
        'addVoucherInfoResponse' => AddVoucherInfoResponse::class,
    ];

    private string $login;
    private string $password;

    /**
     * AbstractNtsWebService constructor.
     * @param string $login
     * @param string $password
     * @param array $options
     * @throws \SoapFault
     */
    public function __construct(string $login, string $password, array $options = [])
    {
        $this->login = $login;
        $this->password = $password;

        $options = array_merge($this->generateOptions(), $options);

        parent::__construct(self::WSDL_PRODUCTION, $options);
    }

    protected function generateOptions(): array
    {
        $context = stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]
        );
        $options = [
            'trace' => true,
            'features' => true,
            'keep_alive' => true,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'stream_context' => $context,
            'login' => $this->login,
            'password' => $this->password
        ];
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        return $options;
    }

    public function setAuthentication(string $login, string $password, bool $sendToTest = false): void
    {
        $this->login = $login;
        $this->password = $password;
        $wsdl = $sendToTest ? self::WSDL_TEST : self::WSDL_PRODUCTION;
        $this->SoapClient($wsdl, $this->generateOptions());

    }
}