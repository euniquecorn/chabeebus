<?php

Class App extends Controller {
    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct() {
        $url = $this->splitURL();
        $this->router($url);
    }

    private function splitURL() {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }

    private function router($url) {
        if (file_exists("../app/controllers/". strtolower($url[0]) .".php")) { // controller
            $this->controller = strtolower($url[0]);
            unset($url[0]);
    
            require "../app/controllers/". $this->controller .".php";
            $this->controller = new $this->controller;
    
            if (isset($url[1])) { // method
                if (method_exists($this->controller, strtolower($url[1]))) {
                    $this->method = strtolower($url[1]);
                    unset($url[1]);
                }
            }

            $this->params = array_values($url);
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            $this->view("404");
        }
    }
}
