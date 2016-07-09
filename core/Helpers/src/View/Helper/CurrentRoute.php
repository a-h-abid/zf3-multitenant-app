<?php

namespace Helpers\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class CurrentRoute extends AbstractHelper {

    protected $sm;

    protected $router;

    protected $request;

    protected $currentRoute;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->router = $this->sm->get('router');
        $this->request = $this->sm->get('request');

        $routeMatch = $this->router->match($this->request);
        
        if ($routeMatch)
            $this->currentRoute = $routeMatch->getMatchedRouteName();
    }

    public function __invoke()
    {
        return $this->currentRoute;
    }

}