<?php

namespace Tests\Weew\Router\ContainerAware;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Tests\Weew\Router\ContainerAware\Mocks\SomeDependency;
use Weew\Router\ContainerAware\ParameterResolverInvoker;

class ParameterResolverInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $container = new Container();
        $invoker = new ParameterResolverInvoker($container);
        $shared = [];
        $resolver = function(SomeDependency $dependency, $parameter) use (&$shared) {
            $shared[] = $dependency;
            $shared[] = $parameter;

            return $shared;
        };

        $this->assertTrue($shared === $invoker->invoke($resolver, 'foo'));
        $this->assertEquals(2, count($shared));
        $this->assertTrue($shared[0] instanceof SomeDependency);
        $this->assertEquals('foo', $shared[1]);
    }
}
