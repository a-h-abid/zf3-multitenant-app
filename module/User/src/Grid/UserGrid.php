<?php

namespace User\Grid;

class UserGrid {

    public function toolbar()
    {
        $toolbar = [];

        $toolbar['add'] = [
            'label' => 'Add',
            'color' => 'green',
            'icon' => 'fa fa-plus',
            'link' => function($view) {
                return $view->url('admin/user/add/get');
            }
        ];

        return $toolbar;
    }

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
                    'link' => function($item, $view) {
                        return $view->localeUrl('admin/user/edit/get', ['id' => $item['id']]);
                    }
                ],

                'delete' => [
                    'label' => 'Delete',
                    'color' => 'red',
                    'icon' => 'fa fa-times',
                    'prompt' => [
                        'title' => 'Delete Confirmation',
                        'message' => 'Are you sure you want to delete this item?',
                        'accept' => 'Yes',
                        'reject' => 'No',
                        'link' => function($item, $view) {
                            return $view->localeUrl('admin/user/delete/post', ['id' => $item['id']]);
                        },
                        'http-verb' => 'delete'
                    ]
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