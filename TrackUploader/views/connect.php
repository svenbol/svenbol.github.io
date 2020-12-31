<?php
/*
// Local Computer
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
*/

// Heroku trackuploader

$server = "remotemysql.com";
$username = "GsN8DgJAZN";
$password = "Wm5glX6EBD";
$db = "GsN8DgJAZN";

$con = new mysqli($server,$username,$password,$db);

?>