<?php

session_start();
$mysqli = new mysqli("localhost", "Oasis", "aequo3AVoo4y", "Oasisdata");

if ($mysqli -> connect_error) {
    die("échoué" . $mysqli -> connect_error);
}