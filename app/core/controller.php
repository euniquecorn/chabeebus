<?php

Class Controller {
    protected function view($data = []) {
        $page_title = 'ChabeeBus';
        if(isset($data['page_title'])) {
            $page_title = 'ChabeeBus'. "-" .$data['page_title'];
        }

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