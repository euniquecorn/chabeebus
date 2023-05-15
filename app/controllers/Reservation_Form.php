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
            $sql = 'SELECT bus.bus_number, bus.location, schedules.dept_time, schedules.arrival_time
                FROM schedules
                JOIN bus ON schedules.bus_number = bus.bus_number
                WHERE bus.bus_number = '. $busNo .'';
            $schedule = $db->read($sql);

            $sql = 'SELECT * FROM reservations
                JOIN bus ON reservations.bus_number = bus.bus_number
                WHERE bus.bus_number = '. $busNo .'';
            $seats = $db->read($sql);
            $availableSeats = [];
            $occupied = [];
            foreach ($seats as $idx => $seat) {
                $occupied[$idx + 1] = $seat->seat_number;
            }

            for ($i=1; $i <= $seats[0]->capacity; $i++) {
                $found = array_search($i, $occupied);
                if (!$found) {
                    array_push($availableSeats, $i);
                }
            }
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
        
        // if (isset($location)) {
        //     // $sql = "SELECT bus.bus_number, schedules.dept_time, schedules.arrival_time
        //     //         FROM schedules
        //     //         JOIN bus ON schedules.bus_number = bus.bus_number
        //     //         WHERE bus.location = '$location' "
        //     // $db = new Database();
        //     // $result = $db->write($sql);
        //     header("Location: /chabeebus/public/reservation");
        // } else {
        //     // TODO: ADD TOASTER ERROR MESSAGE
        //     header("Location: {$_SERVER["HTTP_REFERER"]}");
        // }

    }

}