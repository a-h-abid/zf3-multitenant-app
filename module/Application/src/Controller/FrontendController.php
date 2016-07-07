<?php

namespace Application\Controller;

use Zend\Mvc\MvcEvent;

abstract class FrontendController extends BaseController
{
    public function onDispatch(MvcEvent $e)
    {
        return parent::onDispatch($e);
    }
}
