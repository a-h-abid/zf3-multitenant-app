<?php

$routes = [];
$routes = array_merge($routes, include __DIR__.'/routes/frontend.php');
$routes = array_merge($routes, include __DIR__.'/routes/backend.php');

return $routes;