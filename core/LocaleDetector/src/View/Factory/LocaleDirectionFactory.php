<?php

namespace LocaleDetector\View\Factory;

use LocaleDetector\View\Helper\LocaleDirection;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LocaleDirectionFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LocaleDirection($container);
    }

}