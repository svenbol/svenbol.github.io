<?php

/*
// 000webhostapp
	$servername = "localhost";
	$username = "id7180973_admintracks";
	$password = "12345678";
	$database = "id7180973_id7180973_tracks";
*/

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

//Heroku 

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"]);

$conn = new mysqli($server,$username,$password,$db);

?>