<?php

namespace SlmLocale\Strategy;

use Interop\Container\ContainerInterface;

class StrategyPluginManagerFactory
{
    public function __invoke(ContainerInterface $serviceManager)
    {
        return new StrategyPluginManager($serviceManager);
    }
}
