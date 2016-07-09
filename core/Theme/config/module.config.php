<?php

namespace Theme;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'router' => [
        'routes' => [

            'theme/assets/publish' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/theme/assets/publish',
                    'defaults' => [
                        'controller' => Controller\AssetsController::class,
                        'action'     => 'publish',
                    ],
                ],
            ],  
        ]
    ],

    'console' => [
        'router' => [
            'routes' => [

                'publish-templates-assets' => [
                    'options' => [
                        'route'    => 'publish-templates-assets',
                        'defaults' => [
                            'controller' => Controller\AssetsController::class,
                            'action'     => 'publish',
                        ],
                    ],
                ],
            
            ]
        ]
    ],

    'controllers' => [
        'factories' => [
            Controller\AssetsController::class => Controller\Factory\AssetsControllerFactory::class,
        ],
    ],

    'service_manager' => [

        'factories' => [
            Service\TemplatesAssetsPublisher::class => Service\TemplatesAssetsPublisherFactory::class,
        ]

    ],

    'template' => [
        'templates_path' => 'template',
        'defaults' => [
            'frontend' => 'zf-skeleton',
            'backend' => 'adminlte'
        ],
    ],

    'view_helpers' => [
        'factories' => [
            'assetsPath' => View\Factory\AssetsPathFactory::class,
            'templateSettings' => View\Factory\TemplateSettingsFactory::class,
            'pageTitle' => View\Factory\PageTitleFactory::class,
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => false,
        'display_exceptions'       => false,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'strategies' => [
            'ViewJsonStrategy', // register JSON renderer strategy
            'ViewFeedStrategy', // register Feed renderer strategy
        ],
    ],

];