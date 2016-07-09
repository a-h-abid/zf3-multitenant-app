<?php

namespace GlobalSettings;

return [

    'site-settings' => [

        'site-name' => 'Multi-Tenant',

        'language-switcher' => true,

    ],

    'service_manager' => [

        'factories' => [
            'breadcrumb' => Service\BreadcrumbNavigationFactory::class,
        ]

    ],

    'view_helpers' => [

        'factories' => [
            'siteSettings' => View\Factory\SiteSettingsFactory::class,
        ]

    ],

];