<?php

namespace Site_Activ_Aqua\Controllers;

abstract class Controller
{

    public function render(string $path, array $data = [])
    {

        extract($data);
        

        ob_start();
    
        include dirname(__DIR__) . '/Views/' . $path . '.php';
        
        $content = ob_get_clean();

        include dirname(__DIR__) . '/Views/base.php';

    }
}