<?php

namespace Tests\Weew\Router\ContainerAware\Mocks;

class SomeDependency {
    public function __construct(AnotherDependency $dependency) {}
}
