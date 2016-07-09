<?php

namespace Theme\View\Factory;

use Theme\View\Helper\TemplateSettings;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class TemplateSettingsFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new TemplateSettings($container);
    }

}