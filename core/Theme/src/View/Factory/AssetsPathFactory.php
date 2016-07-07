<?php

namespace Theme\View\Factory;

use Theme\View\Helper\AssetsPath;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class AssetsPathFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new AssetsPath($container);
    }

}