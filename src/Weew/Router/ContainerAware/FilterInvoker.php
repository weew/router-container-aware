<?php

namespace Weew\Router\ContainerAware;

use Weew\Container\IContainer;
use Weew\Router\IFilterInvoker;
use Weew\Router\IRoute;

class FilterInvoker implements IFilterInvoker {
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
     * @param $filter
     * @param IRoute $route
     *
     * @return bool
     */
    public function invoke($filter, IRoute $route) {
        return !! $this->container->call($filter, ['route' => $route]);
    }
}
