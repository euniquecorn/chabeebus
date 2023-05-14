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

    function delete() {
        if (isset($_POST['delete'])) {
            $sql = "DELETE from reservations WHERE reservation_id = ". $_POST['delete'];
            show($sql);
            $db = new Database();
            $result = $db->write("DELETE from reservations WHERE reservation_id = ". $_POST['delete']);
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }
    }

    function save() {
        $urlArray = splitURL();
        show($urlArray);
    }

}