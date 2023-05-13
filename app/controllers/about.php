<?php
Class About extends Controller {
    function index() {
        $data['title'] = "About";

        $this->view($data);
    }
}