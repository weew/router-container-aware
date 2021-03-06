<?php

namespace Weew\Router\ContainerAware;

use Weew\Container\IContainer;
use Weew\Router\IParameterResolverInvoker;

class ParameterResolverInvoker implements IParameterResolverInvoker {
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
     * @param $resolver
     * @param $parameter
     *
     * @return mixed
     */
    public function invoke($resolver, $parameter) {
        return $this->container->call($resolver, ['parameter' => $parameter]);
    }
}
