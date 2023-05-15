<?php

function show($data) {
    echo "<pre>";
        print_r($data);
    echo "</pre>";
}

function splitURL() {
    $url = isset($_GET['url']) ? $_GET['url'] : "home";
    return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
}

function getAvailableSeats($seats) {
    $availableSeats = [];

    if (count($seats) > 0) {
        $occupied = [];
        foreach ($seats as $idx => $seat) {
            if (isset($seat->seat_number)) {
                $occupied[$idx + 1] = $seat->seat_number;
            }
        }

        for ($i=1; $i <= $seats[0]->capacity; $i++) {
            $found = array_search($i, $occupied);
            if (!$found) {
                array_push($availableSeats, $i);
            }
        }
    }

    return $availableSeats;
}
