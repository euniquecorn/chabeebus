<?php
Class Admin extends Controller {
    function index() {
        $header['title'] = 'common/header-admin';
        $this->view($header);
        
        $db = new Database();
        $data['busSales'] = $db->read("SELECT SUM(r.price) as total_sales, b.bus_number as bus_number
            FROM buses b
            LEFT JOIN reservations r on r.bus_number = b.bus_number
            GROUP BY b.bus_number
            ORDER BY b.bus_number
        ");

        $data['reservations'] = $db->read("SELECT * FROM reservations r
            ORDER BY r.dates DESC
        ");
        $data['sales'] = $db->read("SELECT SUM(reservations.price) as total_sales FROM reservations")[0];
        $data['salesToDate'] = $db->read("SELECT SUM(r.price) as total_sales, r.dates
            FROM reservations r
            GROUP BY r.dates
            ORDER BY r.dates DESC

        ");

        $data['page_title'] = "Admin";
        $data['title'] = 'admin';
        $this->view($data);

        $footer['title'] = 'common/footer-admin';
        $this->view($footer);
    }
}