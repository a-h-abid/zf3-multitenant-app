<?php

namespace Administrator;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [

    'admin' => [
        'type' => Literal::class,
        'options' => [
            'route'    => '/admin',
            'defaults' => [
                'controller' => Controller\LoginController::class,
                'action'     => 'index',
            ],
        ],
        'may_terminate' => true,
        'child_routes' => [
            'dashboard' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/dashboard',
                    'defaults' => [
                        'controller' => Controller\DashboardController::class,
                        'action'     => 'index',
                    ],
                ],
            ]
        ]
    ],

];