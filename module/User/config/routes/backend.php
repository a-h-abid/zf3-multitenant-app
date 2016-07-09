<?php

namespace User;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [

    'admin' => [
        'child_routes' => [
            'user' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/user',
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
                            'defaults' => [
                                'controller' => Controller\Backend\UserController::class,
                                'action'     => 'edit',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                ]
            ]
        ]
    ],

];