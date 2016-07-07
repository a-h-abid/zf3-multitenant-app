<?php

namespace Helpers\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class SiteName extends AbstractHelper {

    protected $sm;

    protected $configs;

    protected $siteName;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->configs = $this->sm->get('configuration');
        $this->siteName = $this->configs['site-settings']['site-name'];
    }

    public function __invoke()
    {
        return $this->siteName;
    }

}