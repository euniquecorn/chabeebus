<?php
Class Reservations extends Controller {
    function index() {
        $header['title'] = 'common/header-admin';
        $this->view($header);
        
        $data['page_title'] = "Admin";
        $data['title'] = 'reservations';
        $this->view($data);

        $footer['title'] = 'common/footer-admin';
        $this->view($footer);
    }
}