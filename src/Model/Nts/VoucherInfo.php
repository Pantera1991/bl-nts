<?php

namespace BaseLinkerNts\Model\Nts;

class VoucherInfo
{

    /**
     * @var string|null $msg
     */
    protected ?string $msg;

    /**
     * @var int|null $value
     */
    protected ?int $value;

    /**
     * @return string
     */
    public function getMsg(): ?string
    {
      return $this->msg;
    }

    /**
     * @param string $msg
     * @return VoucherInfo
     */
    public function setMsg(string $msg): VoucherInfo
    {
      $this->msg = $msg;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return VoucherInfo
     */
    public function setValue(int $value): VoucherInfo
    {
      $this->value = $value;
      return $this;
    }

}
