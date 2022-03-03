<?php

namespace BaseLinkerNts\Model\Nts;

class OrderElementsType
{

    /**
     * @var ItemType[] $item
     */
    protected ?array $item;

    /**
     * @return ItemType[]
     */
    public function getItem(): ?array
    {
      return $this->item;
    }

    /**
     * @param ItemType[] $item
     * @return OrderElementsType
     */
    public function setItem(array $item = null): OrderElementsType
    {
      $this->item = $item;
      return $this;
    }

}
