<?php

return [
    'template' => [
        'name' => 'zf-skeleton',
        'type' => 'frontend',
    ],
    'translator' => [
        'locale' => 'en-US',
        'translation_file_patterns' => [
            [
                'type' => 'phparray',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.php',
                'text_domain' => 'template/frontend/zf-skeleton',
            ],
        ],
    ],
    'view_manager'  => [
        'doctype'            => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => 'template/frontend/zf-skeleton/layout/layout.phtml',
            'error/404'     => 'template/frontend/zf-skeleton/error/404.phtml',
            'error/index'   => 'template/frontend/zf-skeleton/error/index.phtml',
        ]
    ],
];