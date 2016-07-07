<?php

namespace LocaleDetector;

return [

    'locale-detector' => [
        'locales' => [
            'en-US', 'en-GB', 'bn-BD'
        ],
        'default-locale' => 'en-US',
    ],

    'view_helpers' => [
        'invokables' => [
            'currentLocale' => View\Helper\CurrentLocale::class,
        ],
    ],

];