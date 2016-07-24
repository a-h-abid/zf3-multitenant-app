<?php

namespace Helpers\View\Factory;

use Helpers\View\Helper\FormElementPartial;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class FormElementPartialFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new FormElementPartial();
    }

}