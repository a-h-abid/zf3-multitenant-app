<?php

namespace Theme\View\Factory;

use Theme\View\Helper\PageTitle;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class PageTitleFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new PageTitle($container);
    }

}