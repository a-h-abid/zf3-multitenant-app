<?php

namespace Helpers\View\Factory;

use Helpers\View\Helper\SiteName;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class SiteNameFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new SiteName($container);
    }

}