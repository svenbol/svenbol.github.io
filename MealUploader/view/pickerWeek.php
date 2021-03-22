<?php

return pickerWeek();

function pickerWeek(){
	include "connect.php";
	$c->table = "tbl_meals";
	include_once "./class/Meal.class.php";
	session_start();

	$i = new Meal();

	if(isset($_GET['item'])){
		$chosenId = $_GET['item'];

		$qry= "SELECT * FROM $c->table WHERE id LIKE $chosenId";
		$res= mysqli_query($con,$qry) or die("SELECTING FAILED : detail");

		while($dbRow=mysqli_fetch_array($res)){
			
			foreach($i as $prop => $val){
				$i->$prop = $dbRow["$prop"];
			}
		}

		$_SESSION['chosenItem'] = $i;

		$page = include("./template/pagepickerWeek.php");
		return $page;
	}

	$page = include("./template/pagepickerWeek.php");
	return $page;
	
	}
?>