<?php

namespace Localization\View\Helper;

use Locale;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class ConvertToLocaleUrl extends AbstractHelper {

    protected $sm;

    protected $configs;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->configs = $this->sm->get('configuration');
    }

    public function __invoke($url, $locale = null)
    {
        $url = '/'. ltrim($url, '/');
        if ($this->configs['site-settings']['show-default-lang-uri'])
            $locale = '/' . ($locale ?: Locale::getDefault());
        else
            $locale = '';

        return "{$locale}{$url}";
    }

}