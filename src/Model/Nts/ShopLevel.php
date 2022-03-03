<?php

namespace BaseLinkerNts\Model\Nts;

class ShopLevel
{

    /**
     * @var string|null $no
     */
    protected ?string $no;

    /**
     * @var float|null $qty
     */
    protected ?float $qty;

    /**
     * @param string $no
     * @param float $qty
     */
    public function __construct(string $no, float $qty)
    {
      $this->no = $no;
      $this->qty = $qty;
    }

    /**
     * @return string
     */
    public function getNo(): ?string
    {
      return $this->no;
    }

    /**
     * @param string $no
     * @return ShopLevel
     */
    public function setNo(string $no): ShopLevel
    {
      $this->no = $no;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty(): ?float
    {
      return $this->qty;
    }

    /**
     * @param float $qty
     * @return ShopLevel
     */
    public function setQty(float $qty): ShopLevel
    {
      $this->qty = $qty;
      return $this;
    }

}
