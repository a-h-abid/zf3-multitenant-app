<?php

namespace Administrator;

use AbdPlatform\Extend\Router\Http\Literal;
use AbdPlatform\Extend\Router\Http\Segment;

return [

    'admin' => [
        'type' => Literal::class,
        'options' => [
            'route'    => '/admin',
            'verb' => 'get',
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
                    'verb' => 'get',
                    'defaults' => [
                        'controller' => Controller\DashboardController::class,
                        'action'     => 'index',
                    ],
                ],
            ]
        ]
    ],

];