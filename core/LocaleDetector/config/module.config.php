<?php

namespace LocaleDetector;

return [

    'locale-detector' => [
        'locales' => [
            'en-US', 'en-GB', 'bn-BD'
        ],
        'rtl-locales' => [
            'ar-SA', 'ug-CN', 'ur-PK', 'ar-AE', 'tg-TJ', 'sd-IN', 'fa-IR', 'pa-IN', 'ps-AF', 'ks-IN', 'ku-TR', 'yi-US', 'he-IL', 'mn-MN', 'dv-MV',
        ],
        'default-locale' => 'en-US',
    ],

    'view_helpers' => [
        'factories' => [
            'localesList' => View\Factory\LocalesListFactory::class,
            'localeDirection' => View\Factory\LocaleDirectionFactory::class,
        ],
        'invokables' => [
            'currentLocale' => View\Helper\CurrentLocale::class,
        ],
    ],

];