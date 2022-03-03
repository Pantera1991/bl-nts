<?php

namespace BaseLinkerNts\Model\Nts;

class Clients
{

    /**
     * @var ClientSearchParamsType|null $search_par
     */
    protected ?ClientSearchParamsType $search_par;

    /**
     * @param ClientSearchParamsType $search_par
     */
    public function __construct(ClientSearchParamsType $search_par)
    {
      $this->search_par = $search_par;
    }

    /**
     * @return ClientSearchParamsType
     */
    public function getSearch_par(): ?ClientSearchParamsType
    {
      return $this->search_par;
    }

    /**
     * @param ClientSearchParamsType $search_par
     * @return Clients
     */
    public function setSearch_par(ClientSearchParamsType $search_par): Clients
    {
      $this->search_par = $search_par;
      return $this;
    }

}
