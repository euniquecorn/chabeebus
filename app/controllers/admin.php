<?php
Class Admin extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);

        $data['page_title'] = "Admin";
        $data['title'] = "Admin";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }
}