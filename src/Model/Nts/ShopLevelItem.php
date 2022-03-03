<?php

namespace BaseLinkerNts\Model\Nts;

class ShopLevelItem
{

    /**
     * @var ShopLevel[] $shop
     */
    protected ?array $shop;

    /**
     * @var string|null $item
     */
    protected ?string $item;

    /**
     * @var string|null $name
     */
    protected ?string $name;

    /**
     * @param string $item
     * @param string $name
     */
    public function __construct(string $item, string $name)
    {
      $this->item = $item;
      $this->name = $name;
    }

    /**
     * @return ShopLevel[]
     */
    public function getShop(): ?array
    {
      return $this->shop;
    }

    /**
     * @param ShopLevel[] $shop
     * @return ShopLevelItem
     */
    public function setShop(array $shop = null): ShopLevelItem
    {
      $this->shop = $shop;
      return $this;
    }

    /**
     * @return string
     */
    public function getItem(): ?string
    {
      return $this->item;
    }

    /**
     * @param string $item
     * @return ShopLevelItem
     */
    public function setItem(string $item): ShopLevelItem
    {
      $this->item = $item;
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
     * @return ShopLevelItem
     */
    public function setName(string $name): ShopLevelItem
    {
      $this->name = $name;
      return $this;
    }

}
