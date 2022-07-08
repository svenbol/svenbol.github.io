<?php

return pickerDay();

function pickerDay(){
	include "connect.php";
	$c->table = "tbl_meals";

	include_once "./class/Meal.class.php";
	session_start();

	$i = new Meal();

	$count= "SELECT count(*) FROM $c->table";
	$countres=mysqli_query($con,$count);
	while($dbRow=mysqli_fetch_array($countres)) $random = rand(1,$dbRow[0]);
	
	$qry= "SELECT * FROM $c->table WHERE id LIKE '$random'";
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : detail");

	while($dbRow=mysqli_fetch_array($res)) foreach($i as $prop => $val) $i->$prop = $dbRow["$prop"];
		
	$_SESSION['chosenItem'] = $i;
	$page = include("./template/pagePickerDay.php");
	return $page;
	
	}
?>