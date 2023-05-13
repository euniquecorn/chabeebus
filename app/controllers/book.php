<?php
Class Book extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);

        $data['page_title'] = "Book";
        $data['title'] = "book";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }
}