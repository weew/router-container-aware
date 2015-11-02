<?php

namespace Weew\Router\ContainerAware;

use Weew\Container\IContainer;
use Weew\Router\ICallableInvoker;
use Weew\Router\IRouter;

class CallableInvoker implements ICallableInvoker {
    /**
     * @var IContainer
     */
    protected $container;

    /**
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $this->container = $container;
    }

    /**
     * @param callable $callable
     * @param IRouter $router
     */
    public function invoke(callable $callable, IRouter $router) {
        $this->container->call($callable, ['router' => $router]);
    }
}
