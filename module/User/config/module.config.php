<?php

namespace User;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'router' => [
        'routes' => include_once __DIR__.'/routes.php',
    ],

    'navigation' => [
        'breadcrumb' => include_once __DIR__.'/breadcrumb.php',
        'backend-menu' => include_once __DIR__.'/backend-menu.php',
    ],

    'service_manager' => [
        'factories' => [
            Grid\UserGrid::class => Grid\Factory\UserGridFactory::class,
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\Backend\UserController::class => Controller\Backend\Factory\UserControllerFactory::class,
        ],
    ],

    'view_manager' => [
        'template_map' => [
            'backend/user/list' => __DIR__ . '/../view/backend/user/list.phtml',
            'backend/user/form' => __DIR__ . '/../view/backend/user/form.phtml',
        ],
    ],

];