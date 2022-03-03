<?php

namespace BaseLinkerNts\Model\Nts;

class DynFieldType
{

    /**
     * @var string|null $name
     */
    protected ?string $name;

    /**
     * @var string|null $value
     */
    protected ?string $value ;

    
    public function __construct()
    {
    
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
     * @return DynFieldType
     */
    public function setName(string $name): DynFieldType
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return DynFieldType
     */
    public function setValue(string $value): DynFieldType
    {
      $this->value = $value;
      return $this;
    }

}
