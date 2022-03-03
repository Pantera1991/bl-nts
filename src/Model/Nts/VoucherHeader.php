<?php

namespace BaseLinkerNts\Model\Nts;

use DateTime;

class VoucherHeader
{

    /**
     * @var string|null $pin
     */
    protected ?string $pin;

    /**
     * @var string|null $vouno
     */
    protected ?string $vouno;

    /**
     * @var string|null $date
     */
    protected ?string $date;

    /**
     * @var float|null $totalnet
     */
    protected ?float $totalnet;

    /**
     * @var float|null $totalgross
     */
    protected ?float $totalgross;

    /**
     * @param string $pin
     * @param string $vouno
     * @param float $totalnet
     * @param float $totalgross
     */
    public function __construct(string $pin, string $vouno, float $totalnet, float $totalgross)
    {
      $this->pin = $pin;
      $this->vouno = $vouno;
      $this->totalnet = $totalnet;
      $this->totalgross = $totalgross;
    }

    /**
     * @return string
     */
    public function getPin(): ?string
    {
      return $this->pin;
    }

    /**
     * @param string $pin
     * @return VoucherHeader
     */
    public function setPin(string $pin): VoucherHeader
    {
      $this->pin = $pin;
      return $this;
    }

    /**
     * @return string
     */
    public function getVouno(): ?string
    {
      return $this->vouno;
    }

    /**
     * @param string $vouno
     * @return VoucherHeader
     */
    public function setVouno(string $vouno): VoucherHeader
    {
      $this->vouno = $vouno;
      return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): ?DateTime
    {
      if ($this->date == null) {
        return null;
      }

        try {
          return new DateTime($this->date);
        } catch (\Exception $e) {
          return null;
        }
    }

    /**
     * @param DateTime|null $date
     * @return VoucherHeader
     */
    public function setDate(DateTime $date = null): VoucherHeader
    {
      if ($date == null) {
       $this->date = null;
      } else {
        $this->date = $date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalnet(): ?float
    {
      return $this->totalnet;
    }

    /**
     * @param float $totalnet
     * @return VoucherHeader
     */
    public function setTotalnet(float $totalnet): VoucherHeader
    {
      $this->totalnet = $totalnet;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalgross(): ?float
    {
      return $this->totalgross;
    }

    /**
     * @param float $totalgross
     * @return VoucherHeader
     */
    public function setTotalgross(float $totalgross): VoucherHeader
    {
      $this->totalgross = $totalgross;
      return $this;
    }

}
