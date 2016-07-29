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
            'layout/partials/breadcrumb' => 'template/backend/adminlte/layout/partials/breadcrumb.phtml',
            'layout/partials/sidebar' => 'template/backend/adminlte/layout/partials/sidebar.phtml',
            'layout/partials/navigation/main-menu' => 'template/backend/adminlte/layout/partials/navigation/main-menu.phtml',
            'layout/partials/navigation/sub-menu' => 'template/backend/adminlte/layout/partials/navigation/sub-menu.phtml',
            'layout/partials/control-sidebar' => 'template/backend/adminlte/layout/partials/control-sidebar.phtml',

            'layout/pages/login' => 'template/backend/adminlte/layout/pages/login.phtml',
            'layout/pages/js/login' => 'template/backend/adminlte/layout/pages/js/login.js',
            'layout/pages/list' => 'template/backend/adminlte/layout/pages/list.phtml',
            'layout/pages/js/list' => 'template/backend/adminlte/layout/pages/js/list.js',

            'layout/pages/dashboard' => 'template/backend/adminlte/layout/pages/dashboard.phtml',
            'layout/pages/dashboard-partials/featured-stats' => 'template/backend/adminlte/layout/pages/dashboard-partials/featured-stats.phtml',
            'layout/pages/dashboard-partials/monthly-percentage-stats' => 'template/backend/adminlte/layout/pages/dashboard-partials/monthly-percentage-stats.phtml',
            'layout/pages/dashboard-partials/monthly-sales-report' => 'template/backend/adminlte/layout/pages/dashboard-partials/monthly-sales-report.phtml',
            'layout/pages/dashboard-partials/visitors-report' => 'template/backend/adminlte/layout/pages/dashboard-partials/visitors-report.phtml',

            'layout/pages/form' => 'template/backend/adminlte/layout/pages/form.phtml',
            'layout/pages/js/form' => 'template/backend/adminlte/layout/pages/js/form.js',
            'layout/pages/form-partials/form-wrapper' => 'template/backend/adminlte/layout/pages/form-partials/form-wrapper.phtml',
            'layout/pages/form-partials/element-wrapper' => 'template/backend/adminlte/layout/pages/form-partials/element-wrapper.phtml',
            'layout/pages/form-partials/fieldset-wrapper' => 'template/backend/adminlte/layout/pages/form-partials/fieldset-wrapper.phtml',
            'layout/pages/form-partials/tabset-wrapper' => 'template/backend/adminlte/layout/pages/form-partials/tabset-wrapper.phtml',
            'layout/pages/form-partials/field-group' => 'template/backend/adminlte/layout/pages/form-partials/field-group.phtml',
            'layout/pages/form-partials/zend-form-element-text' => 'template/backend/adminlte/layout/pages/form-partials/default.phtml',
            'layout/pages/form-partials/zend-form-element-email' => 'template/backend/adminlte/layout/pages/form-partials/default.phtml',
            'layout/pages/form-partials/zend-form-element-date' => 'template/backend/adminlte/layout/pages/form-partials/default.phtml',
            'layout/pages/form-partials/zend-form-element-password' => 'template/backend/adminlte/layout/pages/form-partials/default.phtml',
            'layout/pages/form-partials/zend-form-element-select' => 'template/backend/adminlte/layout/pages/form-partials/default.phtml',
            'layout/pages/form-partials/zend-form-element-checkbox' => 'template/backend/adminlte/layout/pages/form-partials/zend-form-element-checkbox.phtml',
            'layout/pages/form-partials/zend-form-element-radio' => 'template/backend/adminlte/layout/pages/form-partials/zend-form-element-radio.phtml',
        ]
    ],
];