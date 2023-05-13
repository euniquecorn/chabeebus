<?php
Class Home extends Controller {
    function index() {
        $db = new Database();
        $data['buses'] = $db->read("Select * from buses");
        $data['title'] = "Home";

        $this->view($data);
    }
}