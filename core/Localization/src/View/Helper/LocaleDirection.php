<?php

namespace Localization\View\Helper;

use Locale;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class LocaleDirection extends AbstractHelper {

    protected $sm;

    protected $configs;

    protected $rtl_locales;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->configs = $this->sm->get('configuration');

        $this->rtl_locales = $this->configs['localization']['rtl-locales'];
    }

    public function __invoke($locale = null)
    {
        $locale = $locale ?: Locale::getDefault();
        return in_array($locale, $this->rtl_locales) ? 'rtl' : 'ltr';
    }

}