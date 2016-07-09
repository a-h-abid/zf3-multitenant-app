<?php

namespace Theme\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class PageTitle extends AbstractHelper
{
    protected $sm;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
    }

    public function __invoke()
    {
        $headTitle = $this->getView()->headTitle()->setSeparator('')->renderTitle();

        return str_replace($this->getView()->siteName(), '', $headTitle);
    }

}