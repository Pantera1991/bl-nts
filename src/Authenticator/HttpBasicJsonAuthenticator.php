<?php


namespace BaseLinkerNts\Authenticator;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\HttpBasicAuthenticator;

class HttpBasicJsonAuthenticator extends HttpBasicAuthenticator
{
    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        $response = new JsonResponse();
        $response->headers->set('WWW-Authenticate', sprintf('Basic realm="%s"', "cron"));
        $response->setStatusCode(JsonResponse::HTTP_UNAUTHORIZED);
        $response->setData(['statusCode' => JsonResponse::HTTP_UNAUTHORIZED, 'message' => "Unauthorized, bad credentials."]);
        return $response;
    }

}