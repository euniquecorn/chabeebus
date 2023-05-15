<?php
Class Book_Form extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $data['page_title'] = "Book_Form";
        $data['title'] = "Book_Form";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }

    function new() {
        $header['title'] = 'common/header';
        $this->view($header);

        $location = $_SESSION['location']; 
        $busSchedules = [];
        if (isset($location)) {
            $sql = 'SELECT b.bus_number, s.dept_time, s.arrival_time, s.price, b.busImage, b.capacity
                FROM schedules s
                JOIN buses b ON s.bus_number = b.bus_number
                WHERE b.location = "'. $location .'"';

            $db = new Database();
            $busSchedules = $db->read($sql);
        } else {
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }

        if (is_array($busSchedules)) {
            foreach ($busSchedules as $idx => $sched) {
                $sql = "SELECT * FROM reservations
                        JOIN buses ON reservations.bus_number = buses.bus_number
                        WHERE buses.bus_number = $sched->bus_number";

                $seats = $db->read($sql);
                $availbleSeats = $sched->capacity;
                if (is_array($seats)) {
                    $availbleSeats = getAvailableSeats($seats);
                }
                
                $busSchedules[$idx]->available = count($availbleSeats);
            }
        }
        
        $data['page_title'] = "Book Form";
        $data['title'] = "Book_Form";
        $data['schedules'] = $busSchedules;
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }

    function save() {
        $date = $_POST['reserveDate'];
        $location = $_POST['location']; 
        show($location);
        show($date);
        
        if (isset($location)) {
            header("Location: /chabeebus/public/reservation");
        } else {
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }

    }

}