<?php
Class Home extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);

        $db = new Database();
        $data['buses'] = $db->read("Select * from buses");
        $data['page_title'] = "Home";
        $data['title'] = "home";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }
}