<?php

namespace User\Grid;

class User {

    public function columns()
    {
        $grid = [];

        $grid['id'] = [
            'label' => 'ID',
            'field' => 'id',
            'default_order' => true,
        ];

        $grid['username'] = [
            'label' => 'Username',
            'field' => 'username',
        ];

        $grid['actions'] = [
            'orderable' => false,
            'searchable' => false,

            'actions' => [

                'edit' => [
                    'label' => 'Edit',
                    'color' => 'blue',
                    'icon' => 'fa fa-pencil',
                    'link' => function($item) {
                        return 'admin/usr/'.$item['id'].'/edit';
                    }
                ],

                'delete' => [
                    'label' => 'Delete',
                    'color' => 'red',
                    'icon' => 'fa fa-times',
                    'link' => function($item) {
                        return 'admin/usr/'.$item['id'].'/delete';
                    }
                ],

            ],
        ];

        return $grid;
    }


    public function data()
    {
        return [

            [
                'id' => '1',
                'username' => 'Tom',
            ],

            [
                'id' => '2',
                'username' => 'Dick',
            ],

            [
                'id' => '3',
                'username' => 'Harry',
            ],

        ];
    }

}