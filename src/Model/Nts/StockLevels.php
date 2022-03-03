<?php

namespace BaseLinkerNts\Model\Nts;

class StockLevels
{

    /**
     * @var SearchParamsType|null $search_par
     */
    protected ?SearchParamsType $search_par;

    /**
     * @param SearchParamsType $search_par
     */
    public function __construct(SearchParamsType $search_par)
    {
      $this->search_par = $search_par;
    }

    /**
     * @return SearchParamsType
     */
    public function getSearch_par(): ?SearchParamsType
    {
      return $this->search_par;
    }

    /**
     * @param SearchParamsType $search_par
     * @return StockLevels
     */
    public function setSearch_par($search_par): StockLevels
    {
      $this->search_par = $search_par;
      return $this;
    }

}
