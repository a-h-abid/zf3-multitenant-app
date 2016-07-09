<?php


return [

    'administration' => [
        'label' => 'Administration',
        'uri' => "#",
        'icon-class' => 'fa fa-cog',
        'pages' => [
            'acl' => [
                'label' => 'Access Control Level',
                'uri' => "#",
                'icon-class' => 'fa fa-dashboard',
                'pages' => [
                    'roles' => [
                        'label' => 'Roles',
                        'icon-class' => 'fa fa-cog',
                        'uri' => 'admin/roles',
                    ],
                    'permissions' => [
                        'label' => 'Permissions',
                        'icon-class' => 'fa fa-cog',
                        'uri' => 'admin/permissions',
                    ]
                ]
            ]
        ]
    ]
];

