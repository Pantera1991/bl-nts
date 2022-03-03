<?php

namespace BaseLinkerNts\Model\Nts;

class ClientCreate
{

    /**
     * @var CustomerDataType|null $client_data
     */
    protected ?CustomerDataType $client_data;

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
     * @return ClientCreate
     */
    public function setClient_data(CustomerDataType $client_data): ClientCreate
    {
      $this->client_data = $client_data;
      return $this;
    }

}
