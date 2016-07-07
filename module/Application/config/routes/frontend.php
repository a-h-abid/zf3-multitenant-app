<?php

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [

    'home' => [
        'type' => Literal::class,
        'options' => [
            'route'    => '/',
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
            'defaults' => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'about',
            ],
        ],
    ],
    'color' => [
        'type'    => Segment::class,
        'options' => [
            'route'    => '/{color}',
            'defaults' => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'color',
            ],
        ],
    ],      

];