<?php

namespace LocaleDetector\View\Helper;

use Locale;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class LocalesList extends AbstractHelper {

    protected $sm;

    protected $configs;

    protected $localesList = [];

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->configs = $this->sm->get('configuration');

        $rtl_locales = $this->configs['locale-detector']['rtl-locales'];

        foreach ($this->configs['locale-detector']['locales'] as $locale)
        {
            $this->localesList[] = array(
                'locale' => $locale,
                'name' => Locale::getDisplayName($locale),
                'language' => Locale::getDisplayLanguage($locale),
                'region' => Locale::getDisplayRegion($locale),
                'region_code' => substr($locale, -2, 2),
                'direction' => in_array($locale, $rtl_locales) ? 'rtl' : 'ltr',
            );
        }
        
    }

    public function __invoke()
    {
        return $this->localesList;
    }

}