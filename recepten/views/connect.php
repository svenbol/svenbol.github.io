<?php
$servername = "localhost";
$username = "id7180973_admintracks";
$password = "12345678";
$database = "id7180973_id7180973_tracks";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: ERROR :::  " . mysqli_connect_error());
}