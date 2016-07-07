<?php

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [

    'admin' => [
        'type' => Literal::class,
        'options' => [
            'route'    => '/admin',
            'defaults' => [
                'controller' => Controller\AdminController::class,
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
                        'controller' => Controller\AdminController::class,
                        'action'     => 'dashboard',
                    ],
                ],
            ]
        ]
    ],

];