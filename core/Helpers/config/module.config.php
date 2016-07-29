<?php

namespace Helpers;

use Zend\I18n\View\Helper\Translate;

return [

    'controller_plugins' => [

        'factories' => [
            'setTitle' => Controller\Plugin\Factory\SetTitleFactory::class,
        ],

    ],

    'view_helpers' => [

        'invokables' => [
            'translate' => Translate::class,
        ],

        'factories' => [
            'currentRoute' => View\Factory\CurrentRouteFactory::class,
            'currentRouteParams' => View\Factory\CurrentRouteParamsFactory::class,
            'siteName' => View\Factory\SiteNameFactory::class,
            'formElementPartial' => View\Factory\FormElementPartialFactory::class,
            'formBuilder' => View\Factory\FormBuilderFactory::class,
        ],

    ],

];