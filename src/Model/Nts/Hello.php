<?php

namespace BaseLinkerNts\Model\Nts;

class Hello
{

    /**
     * @var string $app
     */
    protected $app;

    /**
     * @param string $app
     */
    public function __construct(string $app)
    {
      $this->app = $app;
    }

    /**
     * @return string
     */
    public function getApp(): ?string
    {
      return $this->app;
    }

    /**
     * @param string $app
     * @return Hello
     */
    public function setApp(string $app): Hello
    {
      $this->app = $app;
      return $this;
    }

}
