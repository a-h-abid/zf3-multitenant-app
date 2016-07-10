<?php

return [

    'template' => [
        
        'templates_path' => [
            realpath('template')
        ],
        
        'defaults' => [

            'backend'  => [
                'name' => 'adminlte',
                'path' => realpath('template/backend/adminlte'),
            ],

            'frontend' => [
                'name' => 'zf-skeleton',
                'path' => realpath('template/frontend/zf-skeleton'),
            ],

        ],

    ],

];