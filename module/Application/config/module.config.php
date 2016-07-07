<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Mvc\I18n\Router\TranslatorAwareTreeRouteStack;

return [
    'router' => [
        'router_class' => TranslatorAwareTreeRouteStack::class,
        'routes' => include_once __DIR__.'/routes.php',
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
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'application/index/about' => __DIR__ . '/../view/application/index/about.phtml',
            'application/index/color' => __DIR__ . '/../view/application/index/color.phtml',
        ],
    ],
];
