<?php

$servername = 'localhost';
$username = 'admin';
$password = "qwerty";
$database = 'err';

// create connection to database
$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>