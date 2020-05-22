<?php

/*
$servername = "localhost";
$username = "id7180973_admintracks";
$password = "12345678";
$database = "id7180973_id7180973_tracks";
*/

$servername = "localhost";
$username = "root";
$password = "";
$database = "tbl_tracks";


// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>