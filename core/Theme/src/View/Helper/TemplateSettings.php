<?php

namespace Theme\View\Helper;

use Theme\Module as ThemeModule;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class TemplateSettings extends AbstractHelper {

    protected $sm;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
    }

    public function __invoke($key = null)
    {
        return $key == null ? ThemeModule::$templateSettings : ThemeModule::$templateSettings[$key];
    }

}