<?php

namespace BaseLinkerNts\Model\Nts;

class VoucherDetail
{

    /**
     * @var string|null $item_code
     */
    protected ?string $item_code;

    /**
     * @var string|null $item_name
     */
    protected ?string $item_name;

    /**
     * @var float|null $amount
     */
    protected ?float $amount;

    /**
     * @var float|null $price
     */
    protected ?float $price;

    /**
     * @var float|null $price_gross
     */
    protected ?float $price_gross;

    /**
     * @var float|null $total_price
     */
    protected ?float $total_price;

    /**
     * @var float|null $total_price_gross
     */
    protected ?float $total_price_gross;


    /**
     * @return string
     */
    public function getItem_code(): ?string
    {
      return $this->item_code;
    }

    /**
     * @param string $item_code
     * @return VoucherDetail
     */
    public function setItem_code(string $item_code): VoucherDetail
    {
      $this->item_code = $item_code;
      return $this;
    }

    /**
     * @return string
     */
    public function getItem_name(): ?string
    {
      return $this->item_name;
    }

    /**
     * @param string $item_name
     * @return VoucherDetail
     */
    public function setItem_name(string $item_name): VoucherDetail
    {
      $this->item_name = $item_name;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return VoucherDetail
     */
    public function setAmount(float $amount): VoucherDetail
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return VoucherDetail
     */
    public function setPrice(float $price): VoucherDetail
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice_gross(): ?float
    {
      return $this->price_gross;
    }

    /**
     * @param float $price_gross
     * @return VoucherDetail
     */
    public function setPrice_gross(float $price_gross): VoucherDetail
    {
      $this->price_gross = $price_gross;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal_price(): ?float
    {
      return $this->total_price;
    }

    /**
     * @param float $total_price
     * @return VoucherDetail
     */
    public function setTotal_price(float $total_price): VoucherDetail
    {
      $this->total_price = $total_price;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal_price_gross(): ?float
    {
      return $this->total_price_gross;
    }

    /**
     * @param float $total_price_gross
     * @return VoucherDetail
     */
    public function setTotal_price_gross(float $total_price_gross): VoucherDetail
    {
      $this->total_price_gross = $total_price_gross;
      return $this;
    }

}
