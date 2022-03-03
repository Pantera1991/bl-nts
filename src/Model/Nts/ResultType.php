<?php

namespace BaseLinkerNts\Model\Nts;

class ResultType
{

    /**
     * @var string $customer_code
     */
    protected string $customer_code;

    /**
     * @var ElementsType $elements
     */
    protected ElementsType $elements;

    /**
     * @return string
     */
    public function getCustomerCode(): string
    {
        return $this->customer_code;
    }

    /**
     * @param string $customer_code
     */
    public function setCustomerCode(string $customer_code): void
    {
        $this->customer_code = $customer_code;
    }

    /**
     * @return ElementsType
     */
    public function getElements(): ElementsType
    {
        return $this->elements;
    }

    /**
     * @param ElementsType $elements
     */
    public function setElements(ElementsType $elements): void
    {
        $this->elements = $elements;
    }

}
