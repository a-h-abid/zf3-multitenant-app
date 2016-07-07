<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Theme;

use Zend\Mvc\MvcEvent;
use Zend\Http\PhpEnvironment\Request as HttpRequest;

class Module
{
    public static $templateName;

    public static $templateType;

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
        $router = $services->get('router');
        $config = $services->get('configuration');
        $matchedRoute = $router->match($request);
        $requestUri = $request->getRequestUri();
        $isBackend = false;
        $templateType = 'frontend';

        if ($matchedRoute)
        {
            $routeName = $matchedRoute->getMatchedRouteName();
            $isBackend = strpos($routeName, 'admin') !== false;
        }
        elseif (strpos($requestUri, 'admin'))
        {
            $isBackend = true;
        }

        $templateType = $isBackend ? 'backend' : 'frontend';

        $themeConfig = require $config['template']['templates_path'].'/'.$templateType.'/'.$config['template']['defaults'][$templateType].'/config/config.php';

        $map = $services->get('ViewTemplateMapResolver');
        $map->merge($themeConfig['view_manager']['template_map']);

        self::$templateName = $config['template']['defaults'][$templateType];
        self::$templateType = $templateType;
    }

}
