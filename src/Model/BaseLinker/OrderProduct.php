<?php


namespace BaseLinkerNts\Model\BaseLinker;


class OrderProduct
{
    private string $storage;
    private string $storage_id;
    private string $order_product_id;
    private string $product_id;
    private string $variant_id;
    private string $name;
    private string $sku;
    private string $ean;
    private string $auction_id;
    private string $attributes;
    private float $price_brutto;
    private int $tax_rate;
    private int $quantity;
    private float $weight;

    /**
     * @return string
     */
    public function getStorage(): string
    {
        return $this->storage;
    }

    /**
     * @param string $storage
     */
    public function setStorage(string $storage): void
    {
        $this->storage = $storage;
    }

    /**
     * @return string
     */
    public function getStorageId(): string
    {
        return $this->storage_id;
    }

    /**
     * @param string $storage_id
     */
    public function setStorageId(string $storage_id): void
    {
        $this->storage_id = $storage_id;
    }

    /**
     * @return string
     */
    public function getOrderProductId(): string
    {
        return $this->order_product_id;
    }

    /**
     * @param string $order_product_id
     */
    public function setOrderProductId(string $order_product_id): void
    {
        $this->order_product_id = $order_product_id;
    }

    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     */
    public function setProductId(string $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return string
     */
    public function getVariantId(): string
    {
        return $this->variant_id;
    }

    /**
     * @param string $variant_id
     */
    public function setVariantId(string $variant_id): void
    {
        $this->variant_id = $variant_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getAuctionId(): string
    {
        return $this->auction_id;
    }

    /**
     * @param string $auction_id
     */
    public function setAuctionId(string $auction_id): void
    {
        $this->auction_id = $auction_id;
    }

    /**
     * @return string
     */
    public function getAttributes(): string
    {
        return $this->attributes;
    }

    /**
     * @param string $attributes
     */
    public function setAttributes(string $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return float
     */
    public function getPriceBrutto(): float
    {
        return $this->price_brutto;
    }

    /**
     * @param float $price_brutto
     */
    public function setPriceBrutto(float $price_brutto): void
    {
        $this->price_brutto = $price_brutto;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->tax_rate;
    }

    /**
     * @param int $tax_rate
     */
    public function setTaxRate(int $tax_rate): void
    {
        $this->tax_rate = $tax_rate;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

}