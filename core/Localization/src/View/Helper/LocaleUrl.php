<?php

namespace Localization\View\Helper;

use Locale;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class LocaleUrl extends AbstractHelper {

    protected $sm;

    protected $configs;

    protected $siteName;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
    }

    public function __invoke($route, $params = [], $locale = null)
    {
        $locale = $locale ?: Locale::getDefault();
        $url = $this->getView()->url($route, $params);

        return "/{$locale}{$url}";
    }

}