<?php
Class Buses extends Controller {
    function index() {
        $header['title'] = 'common/header-admin';
        $this->view($header);

        $db = new Database();
        $data['buses'] = $db->read("Select * from buses");
        $data['page_title'] = "Admin";
        $data['title'] = 'buses';
        $this->view($data);

        $footer['title'] = 'common/footer-admin';
        $this->view($footer);
    }
}