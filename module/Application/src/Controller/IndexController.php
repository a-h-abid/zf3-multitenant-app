<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

class IndexController extends FrontendController
{
    public function indexAction()
    {
        return $this->view('application/index/index');
    }

    public function aboutAction()
    {
        return $this->view('application/index/about');
    }

    public function colorAction()
    {
        return $this->view('application/index/color');
    }
}
