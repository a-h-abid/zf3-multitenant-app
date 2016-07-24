<?php

namespace User\Form\UserForm;

use Zend\Form\Fieldset;
use Zend\Form\Element\Text;

class FullNameFieldset extends Fieldset {

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