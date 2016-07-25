<?php

namespace User\Form\UserForm;

use AbdPlatform\Extend\Form\Fieldgroup;
use Zend\Form\Element\Text;

class FullNameFieldgroup extends Fieldgroup {

    public function init()
    {
        $this->add([
            'name' => 'firstname',
            'type' => Text::class,
            'options' => [
                'label' => 'First Name'
            ]
        ]);

        $this->add([
            'name' => 'middlename',
            'type' => Text::class,
            'options' => [
                'label' => 'Middle Name'
            ]
        ]);

        $this->add([
            'name' => 'lastname',
            'type' => Text::class,
            'options' => [
                'label' => 'Last Name'
            ]
        ]);

    }


}