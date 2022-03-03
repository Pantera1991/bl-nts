<?php

namespace BaseLinkerNts\Model\Nts;

class AttributesType
{

    /**
     * @var AttributeType[] $attribute
     */
    protected ?array $attribute;

    /**
     * @return AttributeType[]
     */
    public function getAttribute(): ?array
    {
      return $this->attribute;
    }

    /**
     * @param AttributeType[] $attribute
     * @return AttributesType
     */
    public function setAttribute(array $attribute = null): AttributesType
    {
      $this->attribute = $attribute;
      return $this;
    }

}
