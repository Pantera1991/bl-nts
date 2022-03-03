<?php

namespace BaseLinkerNts\Model\Nts;

class HelloResponse
{

    /**
     * @var string|null $status
     */
    protected ?string $status;

    /**
     * @var string|null $version
     */
    protected ?string $version;

    /**
     * @param string $status
     * @param string $version
     */
    public function __construct(string $status, string $version)
    {
      $this->status = $status;
      $this->version = $version;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return HelloResponse
     */
    public function setStatus(string $status): HelloResponse
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return HelloResponse
     */
    public function setVersion(string $version): HelloResponse
    {
      $this->version = $version;
      return $this;
    }

}
