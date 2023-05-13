<?php

function router($url) {
    $controller = "home";
    $method = "index";
    $params = [];

    if (file_exists("../app/controllers/". strtolower($url[0]) .".php")) { // controller
        $controller = strtolower($url[0]);
        unset($url[0]);

        require "../app/controllers/". $controller .".php";
        $controller = new $controller;

        if (isset($url[1])) { // method
            if (method_exists($controller, strtolower($url[1]))) {
                $method = strtolower($url[1]);
                unset($url[1]);
            }
        }

        call_user_func_array([$controller, $method], $params);
    } else {
        view("404");
    }

    $params = array_values($url);
}