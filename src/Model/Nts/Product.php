<?php

namespace BaseLinkerNts\Model\Nts;

class Product
{

    /**
     * @var string|null $id
     */
    protected ?string $id;

    /**
     * @var string|null $name
     */
    protected ?string $name;

    /**
     * @var string|null $ext_name
     */
    protected ?string $ext_name;

    /**
     * @var string|null $matgrp
     */
    protected ?string $matgrp;

    /**
     * @var string|null $desc
     */
    protected ?string $desc;

    /**
     * @var string|null $status
     */
    protected ?string $status;

    /**
     * @var float|null $price
     */
    protected ?float $price;

    /**
     * @var float|null $price_promo
     */
    protected ?float $price_promo;

    /**
     * @var string|null $type
     */
    protected ?string $type;

    /**
     * @var string|null $parent_id
     */
    protected ?string $parent_id;

    /**
     * @var float|null $vat_rate
     */
    protected ?float $vat_rate;

    /**
     * @var string|null $unit
     */
    protected ?string $unit;

    /**
     * @var ProductAttributes|null $attribs
     */
    protected ?ProductAttributes $attribs;


    /**
     * @return string
     */
    public function getId(): ?string
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return Product
     */
    public function setId(string $id): Product
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): Product
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExt_name(): ?string
    {
      return $this->ext_name;
    }

    /**
     * @param string $ext_name
     * @return Product
     */
    public function setExt_name(string $ext_name): Product
    {
      $this->ext_name = $ext_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatgrp(): ?string
    {
      return $this->matgrp;
    }

    /**
     * @param string $matgrp
     * @return Product
     */
    public function setMatgrp(string $matgrp): Product
    {
      $this->matgrp = $matgrp;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
      return $this->desc;
    }

    /**
     * @param string $desc
     * @return Product
     */
    public function setDesc(string $desc): Product
    {
      $this->desc = $desc;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return Product
     */
    public function setStatus(string $status): Product
    {
      $this->status = $status;
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
     * @return Product
     */
    public function setPrice(float $price): Product
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice_promo(): ?float
    {
      return $this->price_promo;
    }

    /**
     * @param float $price_promo
     * @return Product
     */
    public function setPrice_promo(float $price_promo): Product
    {
      $this->price_promo = $price_promo;
      return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return Product
     */
    public function setType(string $type): Product
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getParent_id(): ?string
    {
      return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return Product
     */
    public function setParent_id(string $parent_id): Product
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return float
     */
    public function getVat_rate(): ?float
    {
      return $this->vat_rate;
    }

    /**
     * @param float $vat_rate
     * @return Product
     */
    public function setVat_rate(float $vat_rate): Product
    {
      $this->vat_rate = $vat_rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
      return $this->unit;
    }

    /**
     * @param string $unit
     * @return Product
     */
    public function setUnit(string $unit): Product
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return ProductAttributes
     */
    public function getAttribs(): ?ProductAttributes
    {
      return $this->attribs;
    }

    /**
     * @param ProductAttributes $attribs
     * @return Product
     */
    public function setAttribs(ProductAttributes $attribs): Product
    {
      $this->attribs = $attribs;
      return $this;
    }

}
