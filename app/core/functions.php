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
