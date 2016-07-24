<?php

namespace Administrator\Controller;

use Application\Controller\BackendController;

class LoginController extends BackendController
{
    public function indexAction()
    {
        return $this->setTitle('Login')->view('layout/pages/login');
    }
}
