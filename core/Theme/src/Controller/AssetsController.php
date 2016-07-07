<?php

namespace Theme\Controller;

use Application\Controller\BaseController;
use Theme\Service\TemplatesAssetsPublisher;
use Zend\Console\Request as ConsoleRequest;

class AssetsController extends BaseController
{
    protected $publisher;

    public function __construct(TemplatesAssetsPublisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function publishAction()
    {
        $this->publisher->publish();

        $message = "Templates Assets Published !!!";

        if ($this->getRequest() instanceOf ConsoleRequest)
        {
            echo $message;
            return $message;
        }

        return $this->json([
            'status' => 'ok',
            'message' => $message
        ]);
    }

}