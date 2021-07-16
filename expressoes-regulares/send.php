<?php

session_start();

include 'libs/csrf.php';
include 'libs/get-data.php';

$url = filter_input(INPUT_POST, 'url');

if (preg_match('/w{0, 3}\.[a-z]+\.[a-z]+[a-z\.]*$/', $url, $matches)) {
    $url =  $matches[0];
} else {
    die('URL IS INVALID');
}

var_dump($url);