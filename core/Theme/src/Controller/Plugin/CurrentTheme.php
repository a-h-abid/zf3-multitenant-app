<?php

namespace Theme\Controller\Plugin;

use Theme\Module as ThemeModule;
use Zend\Mvc\Controller\Plugin\PluginInterface;
use Zend\Stdlib\DispatchableInterface;

class CurrentTheme implements PluginInterface {

    /**
     * Set Title
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'name' => ThemeModule::$templateName,
            'type' => ThemeModule::$templateType,
        ];
    }

    /**
     * Set controller
     *
     * @param  DispatchableInterface $controller
     * @return PluginManager
     */
    public function setController(DispatchableInterface $controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Retrieve controller instance
     *
     * @return null|DispatchableInterface
     */
    public function getController()
    {
        return $this->controller;
    }

}