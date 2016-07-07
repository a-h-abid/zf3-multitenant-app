<?php

namespace Helpers\View\Factory;

use Helpers\View\Helper\CurrentRoute;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CurrentRouteFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CurrentRoute($container);
    }

}