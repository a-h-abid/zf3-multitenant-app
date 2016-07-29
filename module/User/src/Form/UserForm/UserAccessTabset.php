<?php

namespace User\Form\UserForm;

use AbdPlatform\Extend\Form\Tabset;
use Zend\Form\Element\Email;
use Zend\Form\Element\Password;
use Zend\Form\Element\Checkbox;
use Zend\Form\Element\Radio;
use Zend\Form\Element\Select;

class UserAccessTabset extends Tabset {

    public function init()
    {
        $this->add([
            'name' => 'username',
            'type' => Email::class,
            'attributes' => [
                'placeholder' => 'Enter Username / Email',
            ],
            'options' => [
                'input-size' => '6',
                'label' => 'Username',
                'help' => 'Your username / email you will use in this application',
                'addon-prefix' => '<i class="fa fa-envelope"></i>',
            ]
        ]);

        $this->add([
            'name' => 'password',
            'type' => Password::class,
            'attributes' => [
                'placeholder' => 'Enter Password',
            ],
            'options' => [
                'input-size' => '4',
                'label' => 'Password',
                'addon-suffix' => '<i class="fa fa-lock"></i>',
            ]
        ]);

        $this->add([
            'name' => 'is_active',
            'type' => Checkbox::class,
            'options' => [
                'label' => 'Is Active',
                'checkbox-label' => 'Yes',
            ]
        ]);

        $this->add([
            'name' => 'is_banned',
            'type' => Radio::class,
            'options' => [
                'label' => 'Is Banned',
                'inline' => true,
                'value_options' => [
                    '0' => 'No',
                    '1' => 'Yes',
                ]
            ],
        ]);

        // $this->add([
        //     'name' => 'role',
        //     'type' => Select::class,
        //     'options' => [
        //         'input-size' => '6',
        //         'label' => 'Role',
        //         'empty_option' => '-- Select --',
        //         'value_options' => [
        //             'admin' => 'Admin',
        //             'moderator' => 'Moderator',
        //             'manager' => 'Manager',
        //             'staff' => 'Staff',
        //         ]
        //     ],
        // ]);

    }


}