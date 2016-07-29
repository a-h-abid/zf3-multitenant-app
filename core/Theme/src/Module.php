<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Theme;

use Zend\Stdlib\ArrayUtils;
use Zend\Mvc\MvcEvent;
use Zend\Http\PhpEnvironment\Request as HttpRequest;

class Module
{
    public static $templateName;

    public static $templateType;

    public static $templateSettings = [];

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        $app = $e->getApplication();
        $em = $app->getEventManager();
        $em->attach(MvcEvent::EVENT_ROUTE, array($this,'detectTemplate'), PHP_INT_MAX);
    }

    public function detectTemplate(MvcEvent $e)
    {
        $request = $e->getApplication()->getRequest();
        if (!$request instanceOf HttpRequest)
            return;

        $services = $e->getApplication()->getServiceManager();
        $config = $services->get('configuration');
        $translator = $services->get('translator');
        $requestUri = $request->getRequestUri();
        $isBackend = false;
        $templateType = 'frontend';

        if (strpos($requestUri, 'admin'))
        {
            $isBackend = true;
        }

        $templateType = $isBackend ? 'backend' : 'frontend';

        $themeConfig = require $config['template']['defaults'][$templateType]['path'].'/config/config.php';

        $map = $services->get('ViewTemplateMapResolver');
        $map->merge($themeConfig['view_manager']['template_map']);

        self::$templateName = $config['template']['defaults'][$templateType]['name'];
        self::$templateType = $templateType;
        $this->setTemplateSettings($config, $themeConfig);

        if ( ! isset($themeConfig['translator'], $themeConfig['translator']['translation_file_patterns']))
            return;

        foreach ($themeConfig['translator']['translation_file_patterns'] as $transPattern)
        {
            $translator->addTranslationFilePattern(
                $transPattern['type'],
                $transPattern['base_dir'],
                $transPattern['pattern'],
                $transPattern['text_domain']
            );
        }

    }

    private function setTemplateSettings($config, $themeConfig)
    {
        if (isset($themeConfig['template']['settings']))
        {
            self::$templateSettings = ArrayUtils::merge(self::$templateSettings, $themeConfig['template']['settings']);
        }

        if (isset($config['template']['settings'], $config['template']['settings'][self::$templateType], $config['template']['settings'][self::$templateType][self::$templateName]))
        {
            self::$templateSettings = ArrayUtils::merge(self::$templateSettings, $config['template']['settings'][self::$templateType][self::$templateName]);
        }
    }

}
