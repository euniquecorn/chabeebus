<?php

Class App {
    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct() {
        $url = $this->slitURL();
        router($url); 
    }

    private function slitURL() {
        return explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL));
    }
}
