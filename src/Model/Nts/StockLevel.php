<?php

namespace BaseLinkerNts\Model\Nts;

class StockLevel
{

    /**
     * @var string|null $id
     */
    protected ?string $id = null;

    /**
     * @var string|null $name
     */
    protected ?string $name = null;

    /**
     * @var float|null $qty
     */
    protected ?float $qty = null;

    /**
     * @var float|null $sqty
     */
    protected ?float $sqty = null;

    /**
     * @param string $id
     * @param string $name
     * @param float $qty
     * @param float $sqty
     */
    public function __construct(string $id, string $name, float $qty, float $sqty)
    {
      $this->id = $id;
      $this->name = $name;
      $this->qty = $qty;
      $this->sqty = $sqty;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return StockLevel
     */
    public function setId(string $id): StockLevel
    {
      $this->id = $id;
      return $this;
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
     * @return StockLevel
     */
    public function setName(string $name): StockLevel
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty(): ?float
    {
      return $this->qty;
    }

    /**
     * @param float $qty
     * @return StockLevel
     */
    public function setQty(float $qty): StockLevel
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getSqty(): ?float
    {
      return $this->sqty;
    }

    /**
     * @param float $sqty
     * @return StockLevel
     */
    public function setSqty(float $sqty): StockLevel
    {
      $this->sqty = $sqty;
      return $this;
    }

}
