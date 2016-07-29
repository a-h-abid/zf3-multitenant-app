<?php

namespace User\Form\UserForm;

use AbdPlatform\Extend\Form\Tabset;
use User\Form\UserForm\FullNameFieldgroup;
use Zend\Form\Element\Date;
use Zend\Form\Element\Radio;

class UserProfileTabset extends Tabset {

    public function init()
    {
        $this->add([
            'name' => 'fullname',
            'type' => FullNameFieldgroup::class,
            'options' => [
                'label' => 'Full Name',
                'help' => 'Your full name as in your passport',
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
            'name' => 'gender',
            'type' => Radio::class,
            'options' => [
                'label' => 'Gender',
                'inline' => true,
                'value_options' => [
                    'm' => 'Male',
                    'f' => 'Female',
                ]
            ],
        ]);

    }


}