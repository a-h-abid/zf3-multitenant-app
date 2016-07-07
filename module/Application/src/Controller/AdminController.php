<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

class AdminController extends BackendController
{
    public function indexAction()
    {
        return $this->view('application/admin/index');
    }

    public function dashboardAction()
    {
        return $this->view('application/admin/dashboard');
    }
}
