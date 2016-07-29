<?php

namespace User\Controller\Backend;

use Application\Controller\BackendController;
use User\Grid\UserGrid;
use User\Form\UserForm;

class UserController extends BackendController
{
    protected $grid;
    protected $form;

    public function __construct(UserGrid $grid, UserForm $form)
    {
        $this->grid = $grid;
        $this->form = $form;
    }

    public function listAction()
    {
        return $this->setTitle('Users List')
                    ->viewList(['grid' => $this->grid]);
    }

    public function addAction()
    {
        $this->form->setAttribute('method','post')
                    ->setAttribute('action',$this->url()->fromRoute('admin/user/add/post'));

        return $this->setTitle('Add User')
                    ->viewForm(['form' => $this->form]);
    }

    public function editAction()
    {
        $this->form->setAttribute('method','post')
                    ->setAttribute('action',$this->url()->fromRoute('admin/user/edit/post', $this->params()->fromRoute()));

        return $this->setTitle('Edit User')
                    ->viewForm(['form' => $this->form]);
    }

    public function deleteAction()
    {
        die('yes del me baby');
    }

}
