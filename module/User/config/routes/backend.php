<?php

namespace User;

// use AbdPlatform\Extend\Router\Http\Literal;
// use AbdPlatform\Extend\Router\Http\Segment;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\Router\Http\Method;

return [

    'admin' => [
        'child_routes' => [
            'user' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/user',
                ],
                'may_terminate' => false,
                'child_routes' => [
                    'get' => [
                        'type' => Method::class,
                        'options' => [
                            'verb' => 'get',
                            'defaults' => [
                                'controller' => Controller\Backend\UserController::class,
                                'action'     => 'list',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                    'add' => [
                        'type' => Literal::class,
                        'options' => [
                            'route'    => '/add',
                        ],
                        'may_terminate' => false,
                        'child_routes' => [
                            'get' => [
                                'type' => Method::class,
                                'options' => [
                                    'verb' => 'get',
                                    'defaults' => [
                                        'controller' => Controller\Backend\UserController::class,
                                        'action'     => 'add',
                                    ],
                                ],
                                'may_terminate' => true,
                            ],
                            'post' => [
                                'type' => Method::class,
                                'options' => [
                                    'verb' => 'post',
                                    'defaults' => [
                                        'controller' => Controller\Backend\UserController::class,
                                        'action'     => 'insert',
                                    ],
                                ],
                                'may_terminate' => true,
                            ],
                        ],
                    ],
                    'edit' => [
                        'type' => Segment::class,
                        'options' => [
                            'route'    => '/edit/:id',
                            'constraints' => [
                                'id' => '[0-9]+'
                            ],
                        ],
                        'may_terminate' => false,
                        'child_routes' => [
                            'get' => [
                                'type' => Method::class,
                                'options' => [
                                    'verb' => 'get',
                                    'defaults' => [
                                        'controller' => Controller\Backend\UserController::class,
                                        'action'     => 'edit',
                                    ],
                                ],
                                'may_terminate' => true,
                            ],
                            'post' => [
                                'type' => Method::class,
                                'options' => [
                                    'verb' => 'post',
                                    'defaults' => [
                                        'controller' => Controller\Backend\UserController::class,
                                        'action'     => 'update',
                                    ],
                                ],
                                'may_terminate' => true,
                            ],
                        ],
                    ],
                    'delete' => [
                        'type' => Segment::class,
                        'options' => [
                            'route'    => '/delete[/:id]',
                            'constraints' => [
                                'id' => '[0-9]+'
                            ],
                            'defaults' => [
                                'controller' => Controller\Backend\UserController::class,
                                'action'     => 'delete',
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'post' => [
                                'type' => Method::class,
                                'options' => [
                                    'verb' => 'post',
                                    'defaults' => [
                                        'controller' => Controller\Backend\UserController::class,
                                        'action'     => 'delete',
                                    ]
                                ],
                                'may_terminate' => true,
                            ]
                        ],
                    ],
                ]
            ]
        ]
    ],

];