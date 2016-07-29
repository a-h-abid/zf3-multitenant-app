<?php

namespace Application;

// use AbdPlatform\Extend\Router\Http\Literal;
// use AbdPlatform\Extend\Router\Http\Segment;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [

    'home' => [
        'type' => Literal::class,
        'options' => [
            'route'    => '/',
            'verb' => 'get',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
    'about' => [
        'type'    => Literal::class,
        'options' => [
            'route'    => '/about',
            'verb' => 'get',
            'defaults' => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'about',
            ],
        ],
    ],
    // 'color' => [
    //     'type'    => Segment::class,
    //     'options' => [
    //         'route'    => '/color/{color}',
    //         'verb' => 'get',
    //         'defaults' => [
    //             'controller'    => Controller\IndexController::class,
    //             'action'        => 'color',
    //         ],
    //     ],
    // ],

];