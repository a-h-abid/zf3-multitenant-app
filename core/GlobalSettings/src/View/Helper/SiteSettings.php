<?php

namespace GlobalSettings\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class SiteSettings extends AbstractHelper {

    protected $sm;

    protected $siteSettings;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->siteSettings = $this->sm->get('configuration')['site-settings'];
    }

    public function __invoke($key = null)
    {
        return $key == null ? $this->siteSettings : $this->siteSettings[$key];
    }

}