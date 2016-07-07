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

        foreach ($this->configs['locale-detector']['locales'] as $locale)
        {
            
            $this->localesList[] = array(
                'locale' => $locale,
                'name' => Locale::getDisplayName($locale),
                'language' => Locale::getDisplayLanguage($locale),
                'region' => Locale::getDisplayRegion($locale),
            );
        }
        
    }

    public function __invoke()
    {
        return $this->localesList;
    }

}