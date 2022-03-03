<?php


namespace BaseLinkerNts\Controller;


use BaseLinkerNts\Enum\BlStatusesList;
use BaseLinkerNts\Exception\NullPointerException;
use BaseLinkerNts\Model\BaseLinker\OrderResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class CronController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function hello(): JsonResponse
    {
        $this->logger->info("hello message cron test.");

        return new JsonResponse(["message" => "hello"], Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws NullPointerException
     */
    public function sendByStatus(Request $request): JsonResponse
    {
        $this->logger->info("Start call sendByStatus");

        $status = BlStatusesList::DoWyslania;
        if ($request->query->has("status")) {
            $requestStatus = $request->query->get("status");
            if (!BlStatusesList::isValidValue($requestStatus)) {
                throw new BadRequestHttpException(
                    "Status: '$requestStatus' is incorrect, available statuses: " . BlStatusesList::toString()
                );
            }
            $status = $requestStatus;
        }

        $baseLinkerOrderService = $this->container->get('app.service.base_linker.order');
        if (null !== $baseLinkerOrderService) {
            $blResponse = $baseLinkerOrderService->getOrders(null, $status);
            return $this->orderResponse($blResponse);
        }

        throw new NullPointerException("Variable baseLinkerOrderService is not initialized.");
    }

    /**
     * @param Request $request
     * @param int $orderId
     * @return JsonResponse
     * @throws NullPointerException
     */
    public function sendById(Request $request, int $orderId): JsonResponse
    {
        $suffix = $request->query->has('suffix') ? $request->query->get('suffix') : "";

        $sendToNtsTest = $request->query->has('test') ? filter_var(
            $request->query->get('test'),
            FILTER_VALIDATE_BOOL
        ) : false;

        if ("" !== $suffix && 0 === preg_match("/^v\d+$/", $suffix)) {
            throw new BadRequestHttpException(
                "Value of suffix: '$suffix' is incorrect. Suffix must start with a letter 'v' 
                and then must contain a number, e.g: v1."
            );
        }

        $baseLinkerOrderService = $this->container->get('app.service.base_linker.order');
        if (null !== $baseLinkerOrderService) {
            $blResponse = $baseLinkerOrderService->getOrders($orderId);
            return $this->orderResponse($blResponse, $suffix, $sendToNtsTest);
        }

        throw new NullPointerException("Variable baseLinkerOrderService is not initialized.");
    }

    /**
     * @param OrderResponse|null $blOrderResponse
     * @param string $suffix
     * @param bool $sendToNtsTest
     * @return JsonResponse
     * @throws NullPointerException
     */
    private function orderResponse(
        ?OrderResponse $blOrderResponse,
        string $suffix = "",
        bool $sendToNtsTest = false
    ): JsonResponse {
        $ntsOrderManager = $this->container->get('app.manager.nts.order');
        $baseLinkerOrderService = $this->container->get('app.service.base_linker.order');

        if (null === $baseLinkerOrderService) {
            throw new NullPointerException("Variable baseLinkerOrderService is not initialized.");
        }

        if (null === $ntsOrderManager) {
            throw new NullPointerException("Variable ntsOrderManager is not initialized.");
        }

        if (null === $blOrderResponse) {
            throw new NullPointerException("Variable blResponse is not initialized.");
        }

        $this->baseLinkerResponseValidate($blOrderResponse);

        $blOrders = $blOrderResponse->getOrders();

        if (count($blOrders) === 0) {
            throw new BadRequestHttpException("Not found orders in BaseLinker.");
        }

        $notSendOrders = [];

        foreach ($blOrders as $blOrder) {
            $customerCode = $ntsOrderManager->searchClient($blOrder->getEmail());
            $ntsResponse = $ntsOrderManager->sendOrder(
                $blOrder,
                $customerCode,
                "",
                $suffix,
                $sendToNtsTest
            );

            $isValid = $this->ntsResponseValidate(
                $ntsResponse,
                $blOrder->getOrderId(),
                $ntsOrderManager->getLastRequest()
            );

            if ($isValid) {
                $baseLinkerOrderService->setOrderExtraField1($blOrder->getOrderId(), "wysłano do nts");
                $baseLinkerOrderService->setOrderStatus($blOrder->getOrderId(), BlStatusesList::WyslanoDoNts);
            } else {
                $notSendOrders[] = $blOrder->getOrderId();
            }
        }

        return new JsonResponse(
            [
                "quantity orders not sent" => count($notSendOrders),
                "ids orders not sent" => implode(", ", $notSendOrders)
            ],
            JsonResponse::HTTP_OK
        );
    }
}