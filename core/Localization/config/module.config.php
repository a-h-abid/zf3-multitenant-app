<?php

namespace Localization;

return [

    'localization' => [
        'rtl-locales' => [
            'ar-SA', 'ug-CN', 'ur-PK', 'ar-AE', 'tg-TJ', 'sd-IN', 'fa-IR', 'pa-IN', 'ps-AF', 'ks-IN', 'ku-TR', 'yi-US', 'he-IL', 'mn-MN', 'dv-MV',
        ],
    ],

    'site-settings' => [
        'show-default-lang-uri' => true,
        'default-locale' => 'en-US',
        'locales' => [],
    ],

    'view_helpers' => [
        'factories' => [
            'localesList' => View\Factory\LocalesListFactory::class,
            'localeDirection' => View\Factory\LocaleDirectionFactory::class,
            'localeNumber' => View\Factory\LocaleNumberFactory::class,
            'localeUrl' => View\Factory\LocaleUrlFactory::class,
            'convertToLocaleUrl' => View\Factory\ConvertToLocaleUrlFactory::class,
        ],
        'invokables' => [
            'currentLocale' => View\Helper\CurrentLocale::class,
        ],
    ],

];