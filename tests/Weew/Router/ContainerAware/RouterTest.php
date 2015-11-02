<?php

namespace Tests\Weew\Router\ContainerAware;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Router\ContainerAware\CallableInvoker;
use Weew\Router\ContainerAware\FilterInvoker;
use Weew\Router\ContainerAware\ParameterResolverInvoker;
use Weew\Router\ContainerAware\Router;

class RouterTest extends PHPUnit_Framework_TestCase {
    public function test_has_container_aware_invokers() {
        $container = new Container();
        $router = new Router($container);
        $this->assertTrue($router->getCallableInvoker() instanceof CallableInvoker);
        $this->assertTrue(
            $router->getRoutesMatcher()->getFiltersMatcher()
                ->getFilterInvoker() instanceof FilterInvoker
        );
        $this->assertTrue(
            $router->getRoutesMatcher()->getParameterResolver()
                ->getParameterResolverInvoker() instanceof ParameterResolverInvoker
        );
    }
}
