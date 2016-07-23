<?php

namespace User\Controller\Backend;

use Application\Controller\BackendController;

class UserController extends BackendController
{
    public function listAction()
    {
        $grid = new \User\Grid\User;
        return $this->setTitle('Users List')->viewList(compact('grid'));
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
