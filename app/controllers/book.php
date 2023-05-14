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

    function save() {
        $urlArray = splitURL();
        show($urlArray);

        // $date = $_POST['reserveDate'];
        $location = $_POST['location'];
        show($location);
        
        if (isset($location)) {
            // $sql = "DELETE from reservations WHERE reservation_id = ". $_POST['delete'];
            // $db = new Database();
            // $result = $db->write($sql);
            header("Location: /chabeebus/public/Book_Form/new/".$location);
        } else {
            // TODO: ADD TOASTER ERROR MESSAGE
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }

    }

}