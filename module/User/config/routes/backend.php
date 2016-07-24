<?php

namespace User;

use AbdPlatform\Extend\Router\Http\Literal;
use AbdPlatform\Extend\Router\Http\Segment;

return [

    'admin' => [
        'child_routes' => [
            'user' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/user',
                    'verb' => 'get',
                    'defaults' => [
                        'controller' => Controller\Backend\UserController::class,
                        'action'     => 'list',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'add' => [
                        'type' => Literal::class,
                        'options' => [
                            'route'    => '/add',
                            'verb' => 'get',
                            'defaults' => [
                                'controller' => Controller\Backend\UserController::class,
                                'action'     => 'add',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                    'edit' => [
                        'type' => Segment::class,
                        'options' => [
                            'route'    => '/edit/:id',
                            'verb' => 'get',
                            'defaults' => [
                                'controller' => Controller\Backend\UserController::class,
                                'action'     => 'edit',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                    'delete' => [
                        'type' => Literal::class,
                        'options' => [
                            'route'    => '/delete',
                            'verb' => 'delete',
                            'defaults' => [
                                'controller' => Controller\Backend\UserController::class,
                                'action'     => 'delete',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                ]
            ]
        ]
    ],

];