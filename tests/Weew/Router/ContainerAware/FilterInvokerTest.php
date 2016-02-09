<?php

namespace Tests\Weew\Router\ContainerAware;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Http\HttpRequestMethod;
use Weew\Router\ContainerAware\FilterInvoker;
use Tests\Weew\Router\ContainerAware\Mocks\SomeDependency;
use Weew\Router\IRoute;
use Weew\Router\Route;

class FilterInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $container = new Container();
        $invoker = new FilterInvoker($container);
        $route = new Route([HttpRequestMethod::GET], 'bar', 'baz');
        $shared = [];
        $filter = function(SomeDependency $dependency, IRoute $route) use (&$shared) {
            $shared[] = $dependency;
            $shared[] = $route;
        };
        $invoker->invoke($filter, $route);
        $this->assertEquals(2, count($shared));
        $this->assertTrue($shared[0] instanceof SomeDependency);
        $this->assertTrue($shared[1] instanceof IRoute);
        $this->assertTrue($shared[1] === $route);
    }
}
