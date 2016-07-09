<?php

namespace LocaleDetector\View\Helper;

use Locale;
use NumberFormatter;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class LocaleNumber extends AbstractHelper {

    protected $sm;

    protected $configs;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
    }

    public function __invoke($number, $locale = null, $style = NumberFormatter::DECIMAL, $pattern = '')
    {
        $locale = $locale ?: Locale::getDefault();
        return (new NumberFormatter($locale, $style, $pattern))->format($number);
    }

}