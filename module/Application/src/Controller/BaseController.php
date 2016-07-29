<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Zend\Mvc\MvcEvent;

abstract class BaseController extends AbstractActionController
{
    protected function view($view_path, array $data = [])
    {
        return (new ViewModel($data))->setTemplate($view_path);
    }

    protected function json(array $data)
    {
        return new JsonModel($data);
    }

    protected function raw($data)
    {
        return $this->getResponse()->setContent($data);
    }
}
