<?php

namespace BaseLinkerNts\Model\Nts;

class AttributeType
{

    /**
     * @var string $attr_name
     */
    protected string $attr_name;

    /**
     * @var Attr_typeType $attr_type
     */
    protected Attr_typeType $attr_type;

    /**
     * @var string $attr_value
     */
    protected string $attr_value;


    /**
     * @return string
     */
    public function getAttr_name(): ?string
    {
      return $this->attr_name;
    }

    /**
     * @param string $attr_name
     * @return AttributeType
     */
    public function setAttr_name(string $attr_name): AttributeType
    {
      $this->attr_name = $attr_name;
      return $this;
    }

    /**
     * @return Attr_typeType
     */
    public function getAttr_type(): ?Attr_typeType
    {
      return $this->attr_type;
    }

    /**
     * @param Attr_typeType $attr_type
     * @return AttributeType
     */
    public function setAttr_type(Attr_typeType $attr_type): AttributeType
    {
      $this->attr_type = $attr_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttr_value(): ?string
    {
      return $this->attr_value;
    }

    /**
     * @param string $attr_value
     * @return AttributeType
     */
    public function setAttr_value(string $attr_value): AttributeType
    {
      $this->attr_value = $attr_value;
      return $this;
    }

}
