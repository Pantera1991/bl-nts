<?php

namespace BaseLinkerNts\Model\Nts;

class VoucherType
{

    /**
     * @var VoucherHeader|null $vouhdr
     */
    protected ?VoucherHeader $vouhdr;

    /**
     * @var VoucherDetailsType|null $voudtls
     */
    protected ?VoucherDetailsType $voudtls;

    /**
     * @return VoucherHeader
     */
    public function getVouhdr(): ?VoucherHeader
    {
      return $this->vouhdr;
    }

    /**
     * @param VoucherHeader $vouhdr
     * @return VoucherType
     */
    public function setVouhdr(VoucherHeader $vouhdr): VoucherType
    {
      $this->vouhdr = $vouhdr;
      return $this;
    }

    /**
     * @return VoucherDetailsType
     */
    public function getVoudtls(): ?VoucherDetailsType
    {
      return $this->voudtls;
    }

    /**
     * @param VoucherDetailsType $voudtls
     * @return VoucherType
     */
    public function setVoudtls(VoucherDetailsType $voudtls): VoucherType
    {
      $this->voudtls = $voudtls;
      return $this;
    }

}
