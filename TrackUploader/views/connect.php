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

$server = "ec2-54-247-94-127.eu-west-1.compute.amazonaws.com"; //$url["host"];
$username = "urpcpbtnnpqcuv"; // $url["user"];
$password = "17caee8c9c7b4077b417cc5a405f8cbcdc4510a3b396bd651629aa74d4f0298b"; //$url["pass"];
$db = "d9hlug852adfv9"; //substr($url["path"]);

$conn = new mysqli($server,$username,$password,$db);

?>