<?php

namespace BaseLinkerNts\Model\Nts;

class VoucherDetailsType
{

    /**
     * @var VoucherDetail[] $voudetail
     */
    protected ?array $voudetail;

    /**
     * @param VoucherDetail[] $voudetail
     */
    public function __construct(array $voudetail)
    {
      $this->voudetail = $voudetail;
    }

    /**
     * @return VoucherDetail[]
     */
    public function getVoudetail(): ?array
    {
      return $this->voudetail;
    }

    /**
     * @param VoucherDetail[] $voudetail
     * @return VoucherDetailsType
     */
    public function setVoudetail(array $voudetail): VoucherDetailsType
    {
      $this->voudetail = $voudetail;
      return $this;
    }

}
