<?php

return [

    'admin/dashboard' => [
        'pages' => [
            'user' => [
                'label' => 'Users',
                'route' => 'admin/user',
                'pages' => [
                    'add' => [
                        'label' => 'Add',
                        'route' => 'admin/user/add',
                    ]
                ]
            ],
        ]
    ],

];