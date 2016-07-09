<?php

namespace Localization\View\Factory;

use Localization\View\Helper\LocaleNumber;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LocaleNumberFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LocaleNumber($container);
    }

}