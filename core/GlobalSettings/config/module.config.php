<?php

namespace GlobalSettings;

return [

    'site-settings' => [

        'site-name' => 'Multi-Tenant',

        'language-switcher' => true,

    ],

    'view_helpers' => [

        'factories' => [
            'siteSettings' => View\Factory\SiteSettingsFactory::class,
        ]

    ],

];