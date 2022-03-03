<?php

namespace BaseLinkerNts\Model\Nts;

class DynamicFieldsType
{

    /**
     * @var DynFieldType[] $field
     */
    protected ?array $field = null;


    /**
     * @return DynFieldType[]
     */
    public function getField(): ?array
    {
      return $this->field;
    }

    /**
     * @param DynFieldType[] $field
     * @return DynamicFieldsType
     */
    public function setField(array $field = null): DynamicFieldsType
    {
      $this->field = $field;
      return $this;
    }

}
