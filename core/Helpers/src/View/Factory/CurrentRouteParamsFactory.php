<?php

namespace Helpers\View\Factory;

use Helpers\View\Helper\CurrentRouteParams;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CurrentRouteParamsFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CurrentRouteParams($container);
    }

}