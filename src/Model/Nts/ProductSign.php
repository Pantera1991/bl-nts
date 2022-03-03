<?php

namespace BaseLinkerNts\Model\Nts;

class ProductSign
{

    /**
     * @var string|null $name
     */
    protected ?string $name;

    /**
     * @var string|null $value
     */
    protected ?string $value;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
      $this->name = $name;
      $this->value = $value;
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
     * @return ProductSign
     */
    public function setName(string $name): ProductSign
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
     * @return ProductSign
     */
    public function setValue(string $value): ProductSign
    {
      $this->value = $value;
      return $this;
    }
}
