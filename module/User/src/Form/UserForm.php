<?php

namespace User\Form;

use User\Form\UserForm\FullNameFieldgroup;
use User\Form\UserForm\UserAccessTabset;
use User\Form\UserForm\UserProfileTabset;
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
            'name' => 'user_access',
            'type' => UserAccessTabset::class,
            'options' => [
                'label' => 'Access Information',
            ]
        ]);

        $this->add([
            'name' => 'user_profile',
            'type' => UserProfileTabset::class,
            'options' => [
                'label' => 'Profile Information',
            ]
        ]);

    }

}