<?php


namespace BaseLinkerNts\EventSubscriber;


use Monolog\Logger;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSubscriber implements EventSubscriberInterface
{
    private Logger $logger;

    /**
     * ExceptionSubscriber constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }


    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException'
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        // You get the exception object from the received event
        $exception = $event->getThrowable();

        // HttpExceptionInterface is a special type of exception that
        // holds status code and header details
        if ($exception instanceof HttpExceptionInterface) {
            $response = new JsonResponse();
            $response->setStatusCode($exception->getStatusCode());
            $response->setData(['statusCode' => $exception->getStatusCode(), 'message' => $exception->getMessage()]);
            $response->headers->replace($exception->getHeaders());
        } else {
            $response = new Response();
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
            $this->logger->error($exception->getMessage());
        }

        // sends the modified response object to the event
        $event->setResponse($response);
    }
}