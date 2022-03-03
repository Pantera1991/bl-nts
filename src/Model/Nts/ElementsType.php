<?php

namespace BaseLinkerNts\Model\Nts;

class ElementsType
{

    /**
     * @var ResponseItemType[] $item
     */
    protected ?array $item;


    /**
     * @return ResponseItemType[]
     */
    public function getItem(): ?array
    {
      return $this->item;
    }

    /**
     * @param ResponseItemType[] $item
     * @return ElementsType
     */
    public function setItem(array $item = null): ElementsType
    {
      $this->item = $item;
      return $this;
    }

}
