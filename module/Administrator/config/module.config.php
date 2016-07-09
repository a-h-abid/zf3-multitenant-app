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
    'view_manager' => [
        'template_map' => [
            'administrator/login/index' => __DIR__ . '/../view/administrator/login/index.phtml',
            'administrator/login/js/login' => __DIR__ . '/../view/administrator/login/js/login.js',
            'administrator/dashboard/index' => __DIR__ . '/../view/administrator/dashboard/index.phtml',
            'administrator/dashboard/dashboard-partials/featured-stats' => __DIR__ . '/../view/administrator/dashboard/dashboard-partials/featured-stats.phtml',
            'administrator/dashboard/dashboard-partials/monthly-percentage-stats' => __DIR__ . '/../view/administrator/dashboard/dashboard-partials/monthly-percentage-stats.phtml',
            'administrator/dashboard/dashboard-partials/monthly-sales-report' => __DIR__ . '/../view/administrator/dashboard/dashboard-partials/monthly-sales-report.phtml',
            'administrator/dashboard/dashboard-partials/visitors-report' => __DIR__ . '/../view/administrator/dashboard/dashboard-partials/visitors-report.phtml',
        ],
    ],
];
