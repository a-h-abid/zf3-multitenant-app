<?php

namespace Administrator\Controller;

use Application\Controller\BackendController;

class LoginController extends BackendController
{
    public function indexAction()
    {
        return $this->view('administrator/login/index');
    }
}
