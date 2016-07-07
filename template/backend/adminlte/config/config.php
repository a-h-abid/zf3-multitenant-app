<?php

return [
    'template' => [
        'name' => 'adminlte',
        'type' => 'backend',
    ],
    'translator' => [
        'locale' => 'en-US',
        'translation_file_patterns' => [
            [
                'type' => 'phparray',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.php',
                'text_domain' => 'template/backend/adminlte',
            ],
        ],
    ],
    'view_manager'  => [
        'doctype'            => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => 'template/backend/adminlte/layout/layout.phtml',
            'error/404'     => 'template/backend/adminlte/error/404.phtml',
            'error/index'   => 'template/backend/adminlte/error/index.phtml',
            'layout/layout-auth' => 'template/backend/adminlte/layout/layout-auth.phtml',
            'layout/layout-guest' => 'template/backend/adminlte/layout/layout-guest.phtml',
            'layout/partials/header' => 'template/backend/adminlte/layout/partials/header.phtml',
            'layout/partials/sidebar' => 'template/backend/adminlte/layout/partials/sidebar.phtml',
            'layout/partials/control-sidebar' => 'template/backend/adminlte/layout/partials/control-sidebar.phtml',
        ]
    ],
];