<?php

namespace Weew\Router\ContainerAware;

use Weew\Container\IContainer;
use Weew\Router\Router as BaseRouter;

class Router extends BaseRouter {
    /**
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        parent::__construct();

        $this->setCallableInvoker(new CallableInvoker($container));
        $this->getRoutesMatcher()->getFiltersMatcher()
            ->setFilterInvoker(new FilterInvoker($container));
        $this->getRoutesMatcher()->getParameterResolver()
            ->setParameterResolverInvoker(new ParameterResolverInvoker($container));
    }
}
