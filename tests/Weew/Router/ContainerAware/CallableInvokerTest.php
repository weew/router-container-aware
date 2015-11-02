<?php

namespace Tests\Weew\Router\ContainerAware;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Router\ContainerAware\CallableInvoker;
use Tests\Weew\Router\ContainerAware\Mocks\SomeDependency;
use Weew\Router\IRouter;
use Weew\Router\Router;

class CallableInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $container = new Container();
        $invoker = new CallableInvoker($container);
        $router = new Router();
        $shared = [];
        $callable = function(SomeDependency $dependency, IRouter $router) use (&$shared) {
            $shared[] = $dependency;
            $shared[] = $router;
        };

        $invoker->invoke($callable, $router);
        $this->assertEquals(2, count($shared));
        $this->assertTrue($shared[0] instanceof SomeDependency);
        $this->assertTrue($shared[1] instanceof IRouter);
        $this->assertTrue($shared[1] === $router);
    }
}
