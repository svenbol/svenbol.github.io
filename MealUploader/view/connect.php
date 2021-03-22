<?php

include_once "./class/Connect.class.php";

$c = new Connect();

	$c->server = "remotemysql.com";
	$c->username = "GsN8DgJAZN";
	$c->password = "Wm5glX6EBD";
	$c->db = "GsN8DgJAZN";
	$c->table = "tbl_items";
	
$con = new mysqli($c->server,$c->username,$c->password,$c->db);

?>

