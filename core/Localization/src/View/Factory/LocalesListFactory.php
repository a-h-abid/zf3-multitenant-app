<?php

namespace Localization\View\Factory;

use Localization\View\Helper\LocalesList;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LocalesListFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LocalesList($container);
    }

}