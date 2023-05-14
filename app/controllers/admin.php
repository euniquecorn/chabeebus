<?php
Class Admin extends Controller {
    function index() {
        $header['title'] = 'common/header-admin';
        $this->view($header);
        
        $data['page_title'] = "Admin";
        $data['title'] = "Admin";
        $this->view($data);

        $footer['title'] = 'common/footer-admin';
        $this->view($footer);
    }
}