<?php


namespace BaseLinkerNts;


use BaseLinkerNts\Authenticator\HttpBasicJsonAuthenticator;
use BaseLinkerNts\User\Loader\YamlFileLoader;
use Monolog\Logger;
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestMatcher;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager;
use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Encoder\Pbkdf2PasswordEncoder;
use Symfony\Component\Security\Core\User\InMemoryUserProvider;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Http\Firewall;
use Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener;
use Symfony\Component\Security\Http\Firewall\ContextListener;
use Symfony\Component\Security\Http\FirewallMap;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class AppKernel extends HttpKernel
{
    private ?Logger $logger;

    /**
     * AppKernel constructor.
     * @param EventDispatcherInterface $dispatcher
     * @param ControllerResolverInterface $resolver
     * @param RequestStack|null $requestStack
     * @param ArgumentResolverInterface|null $argumentResolver
     * @param Logger|null $logger
     */
    public function __construct(
        EventDispatcherInterface $dispatcher,
        ControllerResolverInterface $resolver,
        RequestStack $requestStack = null,
        ArgumentResolverInterface $argumentResolver = null,
        Logger $logger = null
    ) {
        parent::__construct($dispatcher, $resolver, $requestStack, $argumentResolver);
        $this->logger = $logger;
    }


    public function handle(
        Request $request,
        int $type = HttpKernelInterface::MASTER_REQUEST,
        bool $catch = true
    ): Response {
        try {
            $yamlLoader = new YamlFileLoader(new FileLocator(__DIR__ . '/../config'));
            $users = $yamlLoader->load("users.yml");
        } catch (FileLocatorFileNotFoundException $exception) {
            $this->logger->error("missing configuration file users.yml, " . $exception->getMessage());
            return new Response("", Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $userProvider = new InMemoryUserProvider($users);
        $userChecker = new UserChecker();
        $encoderFactory = new EncoderFactory(
            [
                User::class => new Pbkdf2PasswordEncoder()
            ]
        );

        $providers = [new DaoAuthenticationProvider($userProvider, $userChecker, "main", $encoderFactory)];
        $authenticationManager = new AuthenticationProviderManager($providers, true);

        $httpEntryPoint = new HttpBasicJsonAuthenticator("cron", $userProvider);

        $tokenStorage = new TokenStorage();
        $contextListener = new ContextListener($tokenStorage, [$userProvider], "main", null, $this->dispatcher);
        $basicAuthenticationListener = new BasicAuthenticationListener(
            $tokenStorage,
            $authenticationManager,
            "main",
            $httpEntryPoint
        );

        $firewallMap = new FirewallMap();
        $requestMatcher = new RequestMatcher('^/');

        $listeners = [$contextListener, $basicAuthenticationListener];

        $firewallMap->add($requestMatcher, $listeners);
        $firewall = new Firewall($firewallMap, $this->dispatcher);

        $this->dispatcher->addListener(KernelEvents::REQUEST, [$firewall, 'onKernelRequest']);

        return parent::handle($request, $type, $catch);
    }

}