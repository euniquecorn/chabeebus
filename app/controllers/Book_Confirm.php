<?php
Class Book_Confirm extends Controller {
    function index() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $data['page_title'] = "Book_Confirm";
        $data['title'] = "Book_Confirm";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);
    }

    function new() {
    }

    function save() {
        $header['title'] = 'common/header';
        $this->view($header);
        
        $data['page_title'] = "Book_Confirm";
        $data['title'] = "Book_Confirm";
        $this->view($data);

        $footer['title'] = 'common/footer';
        $this->view($footer);

        $date = $_POST['reserveDate'];
        $busNo = $_POST['busNo'];
        $location = $_POST['location']; 
        $departure = $_POST['departure']; 
        $arrival = $_POST['arrival']; 
        $price = $_POST['price']; 
        $passengerName = $_POST['passengerName']; 
        $seatNo = $_POST['seatNo']; 
        $schedID = $_POST['schedID']; 
        

        
        $sql = "INSERT INTO reservations (passenger_name, dates, sched_id, dept_time, arrival_time, bus_number, location, price, seat_number, paid)
        VALUES ('$passengerName', '$date', $schedID, '$departure', '$arrival', $busNo, '$location', $price, $seatNo, True);";
        $db = new Database();
        $result = $db->write($sql);

        $footer['title'] = 'common/footer';
        $this->view($footer);

    
    }   

}