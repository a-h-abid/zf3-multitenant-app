<?php

namespace GlobalSettings\View\Factory;

use GlobalSettings\View\Helper\SiteSettings;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class SiteSettingsFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new SiteSettings($container);
    }

}