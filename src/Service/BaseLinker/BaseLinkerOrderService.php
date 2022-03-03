<?php


namespace BaseLinkerNts\Service\BaseLinker;


use BaseLinkerNts\Model\BaseLinker\OrderResponse;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;


class BaseLinkerOrderService extends AbstractBaseLinkerService
{

    /**
     * @param int|null $order_id
     * @param int|null $date_confirmed_from
     * @param int|null $date_from
     * @param int|null $id_from
     * @param int|null $status_id
     * @param string|null $filter_email
     * @param bool $get_unconfirmed_orders
     * @return OrderResponse|null
     */
    public function getOrders(
        int $order_id = null,
        int $status_id = null,
        int $date_confirmed_from = null,
        int $date_from = null,
        int $id_from = null,
        string $filter_email = null,
        bool $get_unconfirmed_orders = false
    ): ?OrderResponse {
        $params = [
            "order_id" => $order_id,
            "date_confirmed_from" => $date_confirmed_from,
            "date_from" => $date_from,
            "id_from" => $id_from,
            "status_id" => $status_id,
            "filter_email" => $filter_email,
            "get_unconfirmed_orders" => $get_unconfirmed_orders
        ];

        try {
            $response = $this->httpClient->post(self::BASE_URL, $this->generateOptions("getOrders", $params));
            $json = $response->getBody()->getContents();

            return $this->jsonDecoder->decode($json, OrderResponse::class);
        } catch (GuzzleException $e) {
            $this->logger->error($e->getMessage());
            return null;
        } catch (NotEncodableValueException$e) {
            $this->logger->error($e->getMessage());
            return null;
        }
    }

    public function setOrderExtraField1(int $order_id, string $message): ?OrderResponse
    {
        $params = [
            "order_id" => $order_id,
            "extra_field_1" => $message
        ];

        try {
            $response = $this->httpClient->post(self::BASE_URL, $this->generateOptions("setOrderFields", $params));
            $json = $response->getBody()->getContents();

            return $this->jsonDecoder->decode($json, OrderResponse::class);
        } catch (GuzzleException $e) {
            $this->logger->error($e->getMessage());
            return null;
        } catch (NotEncodableValueException$e) {
            $this->logger->error($e->getMessage());
            return null;
        }
    }

    public function setOrderStatus(int $order_id, int $status_id): ?OrderResponse
    {
        $params = [
            "order_id" => $order_id,
            "status_id" => $status_id,
        ];

        try {
            $response = $this->httpClient->post(self::BASE_URL, $this->generateOptions("setOrderStatus", $params));
            $json = $response->getBody()->getContents();

            return $this->jsonDecoder->decode($json, OrderResponse::class);
        } catch (GuzzleException $e) {
            $this->logger->error($e->getMessage());
            return null;
        } catch (NotEncodableValueException$e) {
            $this->logger->error($e->getMessage());
            return null;
        }
    }

}