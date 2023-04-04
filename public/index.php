<?php

use Site_Activ_Aqua\Autoloader;
use Site_Activ_Aqua\Core\Router;

include '../Autoloader.php';
Autoloader::register();

$route = new Router();

$route->routes();

