<?php

return detail();

function detail(){
	include "connect.php";
	include_once "./class/Item.class.php";
	session_start();

	$i = new Item();

	if(isset($_GET['item'])){
		$chosenId = $_GET['item'];

		$qry= "SELECT * FROM $c->table WHERE id LIKE $chosenId";
		$res= mysqli_query($con,$qry) or die("SELECTING FAILED : detail");

		while($dbRow=mysqli_fetch_array($res)){
			
			foreach($i as $prop => $val){
				$i->$prop = $dbRow["$prop"];
				//$o = $i->$prop;
			}
			//unset($val);
		}

		$_SESSION['chosenItem'] = $i;

		$page = include("./template/pageDetail.php");
		return $page;
	}
	else header("Location: ./view/index.php");
	
	}
?>