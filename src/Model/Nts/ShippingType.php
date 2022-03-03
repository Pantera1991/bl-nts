<?php

namespace BaseLinkerNts\Model\Nts;

class ShippingType
{

    /**
     * @var string $ord_shipping_delivery_type
     */
    protected string $ord_shipping_delivery_type;

    /**
     * @var string $ord_shipping_code
     */
    protected string $ord_shipping_code;

    /**
     * @var float $ord_shipping_vat_rate
     */
    protected float $ord_shipping_vat_rate;

    /**
     * @var float|null $ord_shipping_price
     */
    protected ?float $ord_shipping_price;

    /**
     * @var float $ord_shipping_price_gross
     */
    protected float $ord_shipping_price_gross;

    /**
     * @return string
     */
    public function getOrdShippingDeliveryType(): string
    {
        return $this->ord_shipping_delivery_type;
    }

    /**
     * @param string $ord_shipping_delivery_type
     */
    public function setOrdShippingDeliveryType(string $ord_shipping_delivery_type): void
    {
        $this->ord_shipping_delivery_type = $ord_shipping_delivery_type;
    }

    /**
     * @return string
     */
    public function getOrdShippingCode(): string
    {
        return $this->ord_shipping_code;
    }

    /**
     * @param string $ord_shipping_code
     */
    public function setOrdShippingCode(string $ord_shipping_code): void
    {
        $this->ord_shipping_code = $ord_shipping_code;
    }

    /**
     * @return float
     */
    public function getOrdShippingVatRate(): float
    {
        return $this->ord_shipping_vat_rate;
    }

    /**
     * @param float $ord_shipping_vat_rate
     */
    public function setOrdShippingVatRate(float $ord_shipping_vat_rate): void
    {
        $this->ord_shipping_vat_rate = $ord_shipping_vat_rate;
    }

    /**
     * @return float|null
     */
    public function getOrdShippingPrice(): ?float
    {
        return $this->ord_shipping_price;
    }

    /**
     * @param float|null $ord_shipping_price
     */
    public function setOrdShippingPrice(?float $ord_shipping_price): void
    {
        $this->ord_shipping_price = $ord_shipping_price;
    }

    /**
     * @return float
     */
    public function getOrdShippingPriceGross(): float
    {
        return $this->ord_shipping_price_gross;
    }

    /**
     * @param float $ord_shipping_price_gross
     */
    public function setOrdShippingPriceGross(float $ord_shipping_price_gross): void
    {
        $this->ord_shipping_price_gross = $ord_shipping_price_gross;
    }

}
