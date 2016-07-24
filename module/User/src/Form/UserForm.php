<?php

namespace User\Form;

use User\Form\UserForm\FullNameFieldset;
use Zend\Form\Form as ZendForm;
use Zend\Form\Element\Text;
use Zend\Form\Element\Email;
use Zend\Form\Element\Password;
use Zend\Form\Element\Date;
use Zend\Form\Element\Checkbox;
use Zend\Form\Element\Radio;
use Zend\Form\Element\Select;

class UserForm extends ZendForm {

    public function init()
    {
        $this->add([
            'name' => 'fullname',
            'type' => FullNameFieldset::class,
            'options' => [
                'label' => 'Full Name',
                'help' => 'Your full name as in your passport',
            ]
        ]);

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
            'name' => 'date_of_birth',
            'type' => Date::class,
            'attributes' => [
                'placeholder' => 'Enter Date of Birth',
            ],
            'options' => [
                'input-size' => '4',
                'label' => 'Date of Birth',
                'help' => 'The date you were born in',
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

        $this->add([
            'name' => 'role',
            'type' => Select::class,
            'options' => [
                'input-size' => '6',
                'label' => 'Role',
                'empty_option' => '-- Select --',
                'value_options' => [
                    'admin' => 'Admin',
                    'moderator' => 'Moderator',
                    'manager' => 'Manager',
                    'staff' => 'Staff',
                ]
            ],
        ]);

    }

}