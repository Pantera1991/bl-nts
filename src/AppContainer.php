<?php

namespace BaseLinkerNts;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

class AppContainer extends ContainerBuilder
{

    /**
     * AppContainer constructor.
     * @param RouteCollection $routes
     * @throws \Exception
     */
    public function __construct(RouteCollection $routes)
    {
        parent::__construct();
        $loader = new YamlFileLoader($this, new FileLocator(__DIR__ . '/../config'));

        $this->register('request_context', RequestContext::class);
        $this->register('matcher', UrlMatcher::class)
            ->setArguments([$routes, new Reference('request_context')]);

        $loader->load('container.yml');

    }
}



