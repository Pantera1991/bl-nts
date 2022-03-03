<?php

namespace BaseLinkerNts\Model\Nts;

class ItemType
{

    /**
     * @var string $item_code
     */
    protected string $item_code;

    /**
     * @var float $amount
     */
    protected float $amount;

    /**
     * @var float|null $price
     */
    protected ?float $price;

    /**
     * @var float $price_gross
     */
    protected float $price_gross;

    /**
     * @var float $vat_rate
     */
    protected float $vat_rate;

    /**
     * @var string $delivery_type
     */
    protected string $delivery_type;


    /**
     * @return string
     */
    public function getItemCode(): string
    {
        return $this->item_code;
    }

    /**
     * @param string $item_code
     */
    public function setItemCode(string $item_code): void
    {
        $this->item_code = $item_code;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     */
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPriceGross(): float
    {
        return $this->price_gross;
    }

    /**
     * @param float $price_gross
     */
    public function setPriceGross(float $price_gross): void
    {
        $this->price_gross = $price_gross;
    }

    /**
     * @return float
     */
    public function getVatRate(): float
    {
        return $this->vat_rate;
    }

    /**
     * @param float $vat_rate
     */
    public function setVatRate(float $vat_rate): void
    {
        $this->vat_rate = $vat_rate;
    }

    /**
     * @return string
     */
    public function getDeliveryType(): string
    {
        return $this->delivery_type;
    }

    /**
     * @param string $delivery_type
     */
    public function setDeliveryType(string $delivery_type): void
    {
        $this->delivery_type = $delivery_type;
    }

}
