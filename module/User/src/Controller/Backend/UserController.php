<?php

namespace User\Controller\Backend;

use Application\Controller\BackendController;
use User\Grid\UserGrid;

class UserController extends BackendController
{
    protected $grid;

    public function __construct(UserGrid $grid)
    {
        $this->grid = $grid;
    }

    public function listAction()
    {
        return $this->setTitle('Users List')
                    ->viewList(['grid' => $this->grid]);
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
