<?php

namespace Currency;

use Zend\I18n\View\Helper\CurrencyFormat;

return [

    'view_helpers' => [

        'invokables' => [
            'currency' => CurrencyFormat::class,
        ],

    ]

];