<?php

namespace BaseLinkerNts\Model\Nts;

class VoucherInformationType
{

    /**
     * @var VoucherInfo[] $info
     */
    protected ?array $info;

    /**
     * @return VoucherInfo[]
     */
    public function getInfo(): ?array
    {
      return $this->info;
    }

    /**
     * @param VoucherInfo[] $info
     * @return VoucherInformationType
     */
    public function setInfo(array $info = null): VoucherInformationType
    {
      $this->info = $info;
      return $this;
    }

}
