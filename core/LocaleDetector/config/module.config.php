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
        'factories' => [
            'localesList' => View\Factory\LocalesListFactory::class,
        ],
        'invokables' => [
            'currentLocale' => View\Helper\CurrentLocale::class,
        ],
    ],

];