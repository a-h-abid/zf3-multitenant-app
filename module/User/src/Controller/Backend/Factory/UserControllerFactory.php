<?php

namespace User\Controller\Backend\Factory;

use User\Controller\Backend\UserController;
use User\Grid\UserGrid;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class UserControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return UserController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new UserController($container->get(UserGrid::class));
    }
}