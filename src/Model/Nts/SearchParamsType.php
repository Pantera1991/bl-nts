<?php

namespace BaseLinkerNts\Model\Nts;

class SearchParamsType
{

    /**
     * @var int|null $delta
     */
    protected ?int $delta;

    /**
     * @var string|null $matgroup
     */
    protected ?string $matgroup;

    /**
     * @var string|null $matno
     */
    protected ?string $matno;

    /**
     * @var string|null $matname
     */
    protected ?string $matname;

    /**
     * @return int
     */
    public function getDelta()
    {
      return $this->delta;
    }

    /**
     * @param int $delta
     * @return SearchParamsType
     */
    public function setDelta(int $delta): SearchParamsType
    {
      $this->delta = $delta;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatgroup(): ?string
    {
      return $this->matgroup;
    }

    /**
     * @param string $matgroup
     * @return SearchParamsType
     */
    public function setMatgroup(string $matgroup): SearchParamsType
    {
      $this->matgroup = $matgroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatno(): ?string
    {
      return $this->matno;
    }

    /**
     * @param string $matno
     * @return SearchParamsType
     */
    public function setMatno(string $matno): SearchParamsType
    {
      $this->matno = $matno;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatname(): ?string
    {
      return $this->matname;
    }

    /**
     * @param string $matname
     * @return SearchParamsType
     */
    public function setMatname(string $matname): SearchParamsType
    {
      $this->matname = $matname;
      return $this;
    }

}
