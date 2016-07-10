<?php

namespace Localization\View\Factory;

use Localization\View\Helper\ConvertToLocaleUrl;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ConvertToLocaleUrlFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ConvertToLocaleUrl($container);
    }

}