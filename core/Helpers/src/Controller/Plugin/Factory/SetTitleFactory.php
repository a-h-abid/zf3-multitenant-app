<?php

namespace Helpers\Controller\Plugin\Factory;

use Helpers\Controller\Plugin\SetTitle;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class SetTitleFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $headTitle = $container->get('ViewHelperManager')->get('headTitle');

        return new SetTitle($headTitle);
    }

}