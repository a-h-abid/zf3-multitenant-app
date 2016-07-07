<?php

namespace Administrator\Controller;

use Application\Controller\BackendController;

class DashboardController extends BackendController
{
    public function indexAction()
    {
        return $this->view('administrator/dashboard/index');
    }
}
