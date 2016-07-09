<?php

namespace Administrator\Service;

use Zend\Navigation\Service\AbstractNavigationFactory;

class BackendMenuNavigationFactory extends AbstractNavigationFactory
{
    protected function getName()
    {
        return 'backend-menu';
    }
}
