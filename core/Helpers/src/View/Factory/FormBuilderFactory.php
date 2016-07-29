<?php

namespace Helpers\View\Factory;

use Helpers\View\Helper\FormBuilder;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class FormBuilderFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new FormBuilder();
    }

}