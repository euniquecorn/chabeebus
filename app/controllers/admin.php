<?php
Class Admin extends Controller {
    function index() {
        $data['title'] = "Admin";

        $this->view($data);
    }
}