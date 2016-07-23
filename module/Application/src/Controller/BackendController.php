<?php

namespace Application\Controller;

use Zend\Mvc\MvcEvent;

abstract class BackendController extends BaseController
{
    public function onDispatch(MvcEvent $e)
    {
        return parent::onDispatch($e);
    }

    public function viewList($data = [])
    {
        return $this->view('layout/pages/list', $data);
    }
}
