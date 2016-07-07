<?php

namespace Helpers;

use Zend\I18n\View\Helper\Translate;

return [

    'view_helpers' => [

        'invokables' => [
            'translate' => Translate::class,
        ],

        'factories' => [
            'currentRoute' => View\Factory\CurrentRouteFactory::class,
            'siteName' => View\Factory\SiteNameFactory::class,
            'localeUrl' => View\Factory\LocaleUrlFactory::class,
        ],
        
    ],

];