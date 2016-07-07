<?php

namespace Theme\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class TemplatesAssetsPublisherFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new TemplatesAssetsPublisher($container);
    }

}
