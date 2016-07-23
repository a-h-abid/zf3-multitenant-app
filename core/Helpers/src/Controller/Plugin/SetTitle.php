<?php

namespace Helpers\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\PluginInterface;
use Zend\Stdlib\DispatchableInterface;
use Zend\View\Helper\HeadTitle;

class SetTitle implements PluginInterface {

    protected $headTitle;

    /**
     * Contstructor
     *
     * @param HeadTitle $headTitle
     */
    public function __construct(HeadTitle $headTitle)
    {
        $this->headTitle = $headTitle;
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


    /**
     * Set Title
     *
     * @param  string $title
     * @param  string $setType
     * @return DispatchableInterface
     */
    public function __invoke($title, $setType = null)
    {
        $this->headTitle->set($title, $setType);

        return $this->getController();
    }

}