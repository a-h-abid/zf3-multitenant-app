<?php

namespace User\Controller\Backend;

use Application\Controller\BackendController;

class UserController extends BackendController
{
    public function listAction()
    {
        return $this->view('backend/user/list');
    }

    public function addAction()
    {
        return $this->view('backend/user/form');
    }

    public function editAction()
    {
        return $this->view('backend/user/form');
    }
}
