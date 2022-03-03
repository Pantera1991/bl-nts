<?php

namespace BaseLinkerNts\Model\Nts;

class SalesOrder
{

    /**
     * @var string $shop_no
     */
    protected string $shop_no;

    /**
     * @var string $ord_id
     */
    protected string $ord_id;

    /**
     * @var string $ord_type
     */
    protected string $ord_type;

    /**
     * @var OrderDataType $orderData
     */
    protected OrderDataType $orderData;


    /**
     * @return string
     */
    public function getShopNo(): string
    {
        return $this->shop_no;
    }

    /**
     * @param string $shop_no
     */
    public function setShopNo(string $shop_no): void
    {
        $this->shop_no = $shop_no;
    }

    /**
     * @return string
     */
    public function getOrdId(): string
    {
        return $this->ord_id;
    }

    /**
     * @param string $ord_id
     */
    public function setOrdId(string $ord_id): void
    {
        $this->ord_id = $ord_id;
    }

    /**
     * @return string
     */
    public function getOrdType(): string
    {
        return $this->ord_type;
    }

    /**
     * @param string $ord_type
     */
    public function setOrdType(string $ord_type): void
    {
        $this->ord_type = $ord_type;
    }

    /**
     * @return OrderDataType
     */
    public function getOrderData(): OrderDataType
    {
        return $this->orderData;
    }

    /**
     * @param OrderDataType $orderData
     */
    public function setOrderData(OrderDataType $orderData): void
    {
        $this->orderData = $orderData;
    }

}
