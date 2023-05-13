<?php

Class Controller {
    protected function view($data = []) {
        if (file_exists("../app/views/". strtolower($data['title']) .".phtml")) {
            include "../app/views/". strtolower($data['title']) .".phtml"; 
        } else {
            include "../app/views/404.phtml";
        }
    }

    protected function loadModel($model) {
        if (file_exists("../app/models/". $model .".php")) {
            include "../app/models/". $model .".php";
            return $model = new $model(); 
        }

        return false;
    }
}