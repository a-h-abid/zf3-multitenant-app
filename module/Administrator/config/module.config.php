<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Administrator;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'router' => [
        'routes' => include_once __DIR__.'/routes.php',
    ],

    'navigation' => [
        'breadcrumb' => include_once __DIR__.'/breadcrumb.php',
        'backend-menu' => include_once __DIR__.'/backend-menu.php',
    ],

    'translator' => [
        'locale' => 'en-US',
        'translation_file_patterns' => [
            [
                'type' => 'phparray',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.php',
                'text_domain' => __NAMESPACE__,
            ],
            [
                'type' => 'phparray',
                'base_dir' => __DIR__ . '/../language/routes',
                'pattern' => '%s.php',
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\LoginController::class => InvokableFactory::class,
            Controller\DashboardController::class => InvokableFactory::class,
        ],
    ],

    'service_manager' => [
        'factories' => [
            'backend-menu' => Service\BackendMenuNavigationFactory::class,
        ]
    ],

];
