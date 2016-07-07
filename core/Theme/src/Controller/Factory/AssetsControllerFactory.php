<?php

namespace Theme\Controller\Factory;

use Theme\Controller\AssetsController;
use Theme\Service\TemplatesAssetsPublisher;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class AssetsControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new AssetsController($container->get(TemplatesAssetsPublisher::class));
    }

}