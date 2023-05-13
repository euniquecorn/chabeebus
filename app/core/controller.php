<?php

Class Controller {
    protected function view($view) {
        if (file_exists("../app/views/". $view .".php")) {
            include "../app/views/". $view .".php"; 
        } else {
            include "../app/views/404.php";
        }
    }

    protected function show($data) {
        echo "<pre>";
            print_r($data);
        echo "</pre>";
    }
}