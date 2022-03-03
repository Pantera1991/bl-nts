<?php

namespace BaseLinkerNts\Service\Nts;

use BaseLinkerNts\Model\Nts\AddVoucherInfo;
use BaseLinkerNts\Model\Nts\AddVoucherInfoResponse;
use BaseLinkerNts\Model\Nts\ClientCreate;
use BaseLinkerNts\Model\Nts\ClientCreateResponse;
use BaseLinkerNts\Model\Nts\Clients;
use BaseLinkerNts\Model\Nts\ClientsResponse;
use BaseLinkerNts\Model\Nts\ClientsUpdate;
use BaseLinkerNts\Model\Nts\ClientsUpdateResponse;
use BaseLinkerNts\Model\Nts\Hello;
use BaseLinkerNts\Model\Nts\HelloResponse;
use BaseLinkerNts\Model\Nts\Products;
use BaseLinkerNts\Model\Nts\ProductsResponse;
use BaseLinkerNts\Model\Nts\RegisterVoucher;
use BaseLinkerNts\Model\Nts\RegisterVoucherResponse;
use BaseLinkerNts\Model\Nts\Response;
use BaseLinkerNts\Model\Nts\SalesOrder;
use BaseLinkerNts\Model\Nts\SalesOrderConfirm;
use BaseLinkerNts\Model\Nts\SalesOrderStatus;
use BaseLinkerNts\Model\Nts\ShopLevels;
use BaseLinkerNts\Model\Nts\ShopLevelsResponse;
use BaseLinkerNts\Model\Nts\StatusResponse;
use BaseLinkerNts\Model\Nts\StockLevels;
use BaseLinkerNts\Model\Nts\StockLevelsResponse;
use SoapFault;


class NtsOrderWebService extends AbstractNtsWebService
{
    /**
     * @param string $login
     * @param string $password
     * @param array $options A array of config values
     * @throws SoapFault
     */
    public function __construct(string $login, string $password, array $options = array())
    {
        parent::__construct($login, $password, $options);
    }

    /**
     * @param SalesOrder $parameters
     * @return Response
     */
    public function salesOrder(SalesOrder $parameters): Response
    {
        return $this->__soapCall('salesOrder', array($parameters));
    }

    /**
     * @param SalesOrderConfirm $parameters
     * @return Response
     */
    public function salesOrderConfirm(SalesOrderConfirm $parameters): Response
    {
        return $this->__soapCall('salesOrderConfirm', array($parameters));
    }

    /**
     * @param SalesOrderStatus $parameters
     * @return StatusResponse
     */
    public function salesOrderStatus(SalesOrderStatus $parameters): StatusResponse
    {
        return $this->__soapCall('salesOrderStatus', array($parameters));
    }

    /**
     * @param Hello $parameters
     * @return HelloResponse
     */
    public function hello(Hello $parameters): HelloResponse
    {
        return $this->__soapCall('hello', array($parameters));
    }

    /**
     * @param StockLevels $parameters
     * @return StockLevelsResponse
     */
    public function stockLevels(StockLevels $parameters): StockLevelsResponse
    {
        return $this->__soapCall('stockLevels', array($parameters));
    }

    /**
     * @param Products $parameters
     * @return ProductsResponse
     */
    public function products(Products $parameters): ProductsResponse
    {
        return $this->__soapCall('products', array($parameters));
    }

    /**
     * @param Clients $parameters
     * @return ClientsResponse
     */
    public function clients(Clients $parameters): ClientsResponse
    {
        return $this->__soapCall('clients', array($parameters));
    }

    /**
     * @param ClientsUpdate $parameters
     * @return ClientsUpdateResponse
     */
    public function clientsUpdate(ClientsUpdate $parameters): ClientsUpdateResponse
    {
        return $this->__soapCall('clientsUpdate', array($parameters));
    }

    /**
     * @param ShopLevels $parameters
     * @return ShopLevelsResponse
     */
    public function shopLevels(ShopLevels $parameters): ShopLevelsResponse
    {
        return $this->__soapCall('shopLevels', array($parameters));
    }

    /**
     * @param ClientCreate $parameters
     * @return ClientCreateResponse
     */
    public function clientCreate(ClientCreate $parameters): ClientCreateResponse
    {
        return $this->__soapCall('clientCreate', array($parameters));
    }

    /**
     * @param RegisterVoucher $parameters
     * @return RegisterVoucherResponse
     */
    public function registerVoucher(RegisterVoucher $parameters): RegisterVoucherResponse
    {
        return $this->__soapCall('registerVoucher', array($parameters));
    }

    /**
     * @param AddVoucherInfo $parameters
     * @return addVoucherInfoResponse
     */
    public function addVoucherInfo(AddVoucherInfo $parameters): addVoucherInfoResponse
    {
        return $this->__soapCall('addVoucherInfo', array($parameters));
    }

}
