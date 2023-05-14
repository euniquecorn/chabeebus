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
        $date = $_POST['reserveDate'];
        $location = $_POST['location'];
        
        if (isset($location)) {
            $_SESSION['date'] = $date;
            $_SESSION['location'] = $location;
            header("Location: /chabeebus/public/Book_Form/new/".$location);
        } else {
            // TODO: ADD TOASTER ERROR MESSAGE
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }

    }

}