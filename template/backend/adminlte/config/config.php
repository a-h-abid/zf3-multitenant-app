<?php

return [
    'template' => [
        'name' => 'adminlte',
        'type' => 'backend',
        'settings' => [
            'show-header-messages' => true,
            'show-header-notifications' => true,
            'show-header-tasks' => true,
            'show-control-sidebar' => true,
        ],
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
            'layout/partials/headers/messages' => 'template/backend/adminlte/layout/partials/headers/messages.phtml',
            'layout/partials/headers/notifications' => 'template/backend/adminlte/layout/partials/headers/notifications.phtml',
            'layout/partials/headers/tasks' => 'template/backend/adminlte/layout/partials/headers/tasks.phtml',
            'layout/partials/headers/language-switcher' => 'template/backend/adminlte/layout/partials/headers/language-switcher.phtml',
            'layout/partials/headers/user-menu' => 'template/backend/adminlte/layout/partials/headers/user-menu.phtml',
            'layout/partials/sidebar' => 'template/backend/adminlte/layout/partials/sidebar.phtml',
            'layout/partials/control-sidebar' => 'template/backend/adminlte/layout/partials/control-sidebar.phtml',
        ]
    ],
];