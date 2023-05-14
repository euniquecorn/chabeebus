<?php
Class Schedules extends Controller {
    function index() {
        $header['title'] = 'common/header-admin';
        $this->view($header);
        
        $db = new Database();
        $data['schedules'] = $db->read("Select * from schedules");
        $data['page_title'] = "Admin";
        $data['title'] = 'schedules';
        $this->view($data);

        $footer['title'] = 'common/footer-admin';
        $this->view($footer);
    }
}