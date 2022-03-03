<?php

namespace BaseLinkerNts\Model\Nts;

class ClientsUpdate
{

    /**
     * @var CustomerDataType|null $client_data
     */
    protected ?CustomerDataType $client_data = null;

    /**
     * @param CustomerDataType $client_data
     */
    public function __construct(CustomerDataType $client_data)
    {
      $this->client_data = $client_data;
    }

    /**
     * @return CustomerDataType
     */
    public function getClient_data(): ?CustomerDataType
    {
      return $this->client_data;
    }

    /**
     * @param CustomerDataType $client_data
     * @return ClientsUpdate
     */
    public function setClient_data(CustomerDataType $client_data): ClientsUpdate
    {
      $this->client_data = $client_data;
      return $this;
    }

}
