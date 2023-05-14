<?php
Class About extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $data['page_title'] = "About";
        $data['title'] = "About";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }
}