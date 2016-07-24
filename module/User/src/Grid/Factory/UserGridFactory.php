<?php

namespace User\Grid\Factory;

use User\Grid\UserGrid;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class UserGridFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return UserGrid
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new UserGrid;
    }
}