<?php

namespace BaseLinkerNts\Model\Nts;

class SalesOrderStatus
{

    /**
     * @var string|null $shop_no
     */
    protected ?string $shop_no;

    /**
     * @var string|null $ord_id
     */
    protected ?string $ord_id;

    /**
     * @param string $shop_no
     * @param string $ord_id
     */
    public function __construct(string $shop_no, string $ord_id)
    {
      $this->shop_no = $shop_no;
      $this->ord_id = $ord_id;
    }

    /**
     * @return string
     */
    public function getShop_no(): ?string
    {
      return $this->shop_no;
    }

    /**
     * @param string $shop_no
     * @return SalesOrderStatus
     */
    public function setShop_no(string $shop_no): SalesOrderStatus
    {
      $this->shop_no = $shop_no;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrd_id(): ?string
    {
      return $this->ord_id;
    }

    /**
     * @param string $ord_id
     * @return SalesOrderStatus
     */
    public function setOrd_id(string $ord_id): SalesOrderStatus
    {
      $this->ord_id = $ord_id;
      return $this;
    }

}
