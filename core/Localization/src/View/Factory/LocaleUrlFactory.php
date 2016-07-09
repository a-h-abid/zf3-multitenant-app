<?php

namespace Localization\View\Factory;

use Localization\View\Helper\LocaleUrl;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LocaleUrlFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LocaleUrl($container);
    }

}