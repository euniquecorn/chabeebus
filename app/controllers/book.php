<?php
Class Book extends Controller {
    function index() {
        $data['title'] = "Book";

        $this->view($data);
    }
}