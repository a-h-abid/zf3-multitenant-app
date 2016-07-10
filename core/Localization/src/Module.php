<?php

namespace Localization;

use Locale;
use Exception;
use Zend\EventManager\EventInterface;
use Zend\Mvc\MvcEvent;
use Zend\Http\PhpEnvironment\Request as HttpRequest;

class Module {

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(EventInterface $e)
    {
        $app = $e->getApplication();
        $em = $app->getEventManager();
        $em->attach(MvcEvent::EVENT_ROUTE, array($this,'detectLocale'), PHP_INT_MAX);
    }

    public function detectLocale(MvcEvent $e)
    {
        $app = $e->getApplication();
        $sm  = $app->getServiceManager();
        $request = $app->getRequest();

        if (!$request instanceOf HttpRequest)
            return;

        $uri = $request->getUri();
        $config = $sm->get('configuration');
        $siteSettings = $config['site-settings'];
        $showDefaultLangUri = $siteSettings['show-default-lang-uri'];
        $redirect = false;

        if (!isset($siteSettings['locales']) || empty($siteSettings['locales']))
            throw new Exception("No Supported locales where set in the /config/site-settings.local.php file.");

        $locale = $siteSettings['default-locale'];
        $url = $request->getRequestUri();
        $requestUri = explode('/', $request->getRequestUri());
        $translator = $sm->get('translator');

        // If first uri segment locale is same as default locale
        if ($showDefaultLangUri == false && $requestUri[1] == $locale)
        {
            $redirect = true;
            unset($requestUri[1]);
        }
        // If first uri segment locale not matched with supported locales
        elseif (!in_array($requestUri[1], $siteSettings['locales']))
        {
            if ($showDefaultLangUri)
            {
                $redirect = true;
                $requestUri[0] = $locale; // Set Default Locale;
            }
        }

        if ($redirect)
        {
            $url = '/'.ltrim(implode('/', $requestUri), '/');

            $response = $e->getResponse();
            $response->getHeaders()->addHeaderLine('Location', $url);
            $response->setStatusCode(302);
            $response->sendHeaders();
            // When an MvcEvent Listener returns a Response object,
            // It automatically short-circuit the Application running
            // -> true only for Route Event propagation see Zend\Mvc\Application::run

            // To avoid additional processing
            // we can attach a listener for Event Route with a high priority
            $stopCallBack = function($event) use ($response){
                $event->stopPropagation();
                return $response;
            };

            //Attach the "break" as a listener with a high priority
            $e->getApplication()->getEventManager()->attach(MvcEvent::EVENT_ROUTE, $stopCallBack,-10000);
            return $response;
        }

        // Parse the URI without Locale
        if ($showDefaultLangUri)
        {
            $locale = $requestUri[1];
            unset($requestUri[1]);
        }
        elseif ( ! $showDefaultLangUri)
        {
            if ($locale != $requestUri[1] && in_array($requestUri[1], $siteSettings['locales']))
            {
                $locale = $requestUri[1];
                unset($requestUri[1]);
            }
            else
            {
                unset($requestUri[0]);
            }
        }

        $requestUri = '/'.ltrim(implode('/', $requestUri), '/');
        $uri->setPath($requestUri);
        Locale::setDefault($locale);
        $translator->setLocale($locale);
    }
}