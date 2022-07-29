<?php

include_once "./class/Connect.class.php";

$c = new Connect();

	$c->server = "remotemysql.com";
	$c->username = "skJJl961vs";
	$c->password = "x0RB1dkX6h";
	$c->db = "skJJl961vs";
	$c->table = "tbl_items";
	
$con = new mysqli($c->server,$c->username,$c->password,$c->db);

?>

