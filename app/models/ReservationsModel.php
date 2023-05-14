<?php

Class ReservationsModel {
    function init() {
        if (isset($_POST['delete'])) {
            show($_POST['delete']);
        }
    }

    function removeReservation($id) {
        show($id);
    }
}