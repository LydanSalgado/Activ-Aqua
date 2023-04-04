<?php

namespace Site_Activ_Aqua\Core;

session_start();

class Router
{

    public function routes()

    {
        $controller = (isset($_GET['controller']) ? ucfirst(array_shift($_GET)) : 'home');
        $controller = '\\Site_Activ_Aqua\\Controllers\\' . $controller . 'Controller';

        $action = (isset($_GET['action']) ? array_shift($_GET) : 'index');
        

        $controller = new $controller();
        

        if (method_exists($controller, $action)) {
            (isset($_GET)) ? call_user_func_array([$controller, $action], $_GET) : $controller->$action();
        } else {
            http_response_code(404);
            echo "La page recherchée n'existe pas";

            die();
        }
    }
}
