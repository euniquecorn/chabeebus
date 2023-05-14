<?php
Class Book_Form extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $data['page_title'] = "Book Form";
        $data['title'] = "Book_Form";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }

    function new() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $urlArray = splitURL();
        $location = $urlArray[2];
        $result = [];
        if (isset($location)) {
            $sql = 'SELECT bus.bus_number, schedules.dept_time, schedules.arrival_time, schedules.price, bus.busImage
                FROM schedules
                JOIN bus ON schedules.bus_number = bus.bus_number
                WHERE bus.location = "'. $location .'"';
            // show($sql);
            $db = new Database();
            $result = $db->read($sql);
        } else {
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }
        
        $data['page_title'] = "Book Form";
        $data['title'] = "Book_Form";
        $data['schedules'] = $result;
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }

    function save() {
        $date = $_POST['reserveDate'];
        $location = $_POST['location']; 
        show($location);
        
        if (isset($location)) {
            // $sql = "SELECT bus.bus_number, schedules.dept_time, schedules.arrival_time
            //         FROM schedules
            //         JOIN bus ON schedules.bus_number = bus.bus_number
            //         WHERE bus.location = '$location' "
            // $db = new Database();
            // $result = $db->write($sql);
            header("Location: /chabeebus/public/reservation");
        } else {
            // TODO: ADD TOASTER ERROR MESSAGE
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }

    }

}