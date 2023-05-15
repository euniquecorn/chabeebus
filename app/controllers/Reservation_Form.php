<?php
Class Reservation_Form extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $data['page_title'] = "Reservation_Form";
        $data['title'] = "Reservation_Form";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }

    function new() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $date = $_SESSION['date'];

        $urlArray = splitURL();
        $busNo = $urlArray[2];
        $schedule = [];
        $seats = [];



        if (isset($busNo)) {
            $db = new Database();

            // Seat number
            // $busNo = 1; // Assuming you have a valid bus number

            $sql = 'SELECT buses.capacity, buses.bus_number, buses.location, schedules.dept_time, schedules.arrival_time, schedules.price, schedules.sched_id
                FROM schedules
                JOIN buses ON schedules.bus_number = buses.bus_number
                WHERE buses.bus_number = '. $busNo .'';
            $schedule = $db->read($sql);

            $sql = "SELECT * FROM reservations
                    JOIN buses ON reservations.bus_number = buses.bus_number
                    WHERE buses.bus_number = $busNo";

            $seats = $db->read($sql);
            if (count($seats) == 0) {
                $seats = $schedule;
            }

            $availableSeats = getAvailableSeats($seats);
            // show($availableSeats);

        } else {
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }
        
        $data['page_title'] = "BookReservation_Form";
        $data['title'] = "Reservation_Form";
        $data['schedule'] = $schedule[0];
        $data['date'] = date($date);
        $data['availableSeats'] = $availableSeats;
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