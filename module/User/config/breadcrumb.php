<?php

return [

    'admin/dashboard' => [
        'pages' => [
            'user' => [
                'label' => 'Users',
                'route' => 'admin/user/get',
                'pages' => [
                    'add' => [
                        'label' => 'Add',
                        'route' => 'admin/user/add/get',
                    ],
                    'edit' => [
                        'label' => 'Edit',
                        'route' => 'admin/user/edit/get',
                    ],
                ]
            ],
        ]
    ],

];