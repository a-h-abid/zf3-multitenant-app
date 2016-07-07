<?php

$routes = [];
$routes = array_merge($routes, include __DIR__.'/routes/frontend.php');

return $routes;