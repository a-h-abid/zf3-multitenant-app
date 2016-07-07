<?php

namespace Theme\View\Helper;

use Theme\Module as ThemeModule;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class AssetsPath extends AbstractHelper {

    protected $sm;

    protected $configs;

    protected $template_assets_path;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->configs = $this->sm->get('configuration');

        $this->template_assets_path = 'assets/'.ThemeModule::$templateType.'/'.ThemeModule::$templateName.'/';
    }

    public function __invoke($relativeAssetPath = '')
    {
        return $this->getView()->basePath($this->template_assets_path . $relativeAssetPath);
    }

}