<?php

namespace GlobalSettings\Service;

use Zend\Navigation\Service\AbstractNavigationFactory;

class BreadcrumbNavigationFactory extends AbstractNavigationFactory
{
    protected function getName()
    {
        return 'breadcrumb';
    }
}
