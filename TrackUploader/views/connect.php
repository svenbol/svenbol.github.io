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

//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "postgres://inxmshuupeoyxo:f11bd96c6de474b35577cd6b470552c5d567efdd3e7c9599211b3d2d6c24528e@ec2-54-86-57-171.compute-1.amazonaws.com:5432/d2etsfdv58166o"; //$url["host"];
$username = "inxmshuupeoyxo"; // $url["user"];
$password = "f11bd96c6de474b35577cd6b470552c5d567efdd3e7c9599211b3d2d6c24528e"; //$url["pass"];
$db = "d2etsfdv58166o"; //substr($url["path"]);

$conn = new mysqli($server,$username,$password,$db);

?>