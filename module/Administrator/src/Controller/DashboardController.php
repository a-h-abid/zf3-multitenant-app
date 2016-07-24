<?php

namespace Administrator\Controller;

use Application\Controller\BackendController;

class DashboardController extends BackendController
{
    public function indexAction()
    {
        return $this->setTitle('Dashboard')->view('layout/pages/dashboard');
    }
}
