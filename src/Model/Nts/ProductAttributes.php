<?php

namespace BaseLinkerNts\Model\Nts;

class ProductAttributes
{

    /**
     * @var ProductSign[] $sign
     */
    protected ?array $sign;


    /**
     * @return ProductSign[]
     */
    public function getSign(): ?array
    {
      return $this->sign;
    }

    /**
     * @param ProductSign[] $sign
     * @return ProductAttributes
     */
    public function setSign(array $sign = null): ProductAttributes
    {
      $this->sign = $sign;
      return $this;
    }

}
