<?php

$out = include ("./template/pageNav.php");

/* PAGE NAVIGATION */
	$chosenPage = isset($_GET['page']);
	if($chosenPage) $file = $_GET['page'];
	else $file = 'galleryMeal';

	$chosenMeal = isset($_GET['meal']);
	if($chosenMeal) $file = $_GET['meal'];


/* UPLOAD */ 
//	$upload = isset($_GET['upload']);
//	if($upload) $file = 'upload';

/* READ */
//	$chosenItemId = isset($_GET['item']);
//	if($chosenItemId) {
//		$_SESSION['chosenItemId'] = $_GET['item'];
//		$file = 'detail';
//	}

/* UPDATE */
//	$chosenUpdateId = isset($_GET['update']);
//	if($chosenUpdateId) {
//		$_SESSION['chosenUpdateId'] = $_GET['update'];
//		include "getItemId.php";
//		$file = 'update';
//	}
//	
//	$updateDb = isset($_GET['updateDb']);
//	if($updateDb){
//		$_SESSION['chosenUpdateId'] = $_GET['updateDb'];
//		include "getItem.php";
//		$file = 'updateDb';
//	}

/* DELETE */
//	$chosenDeleteId = isset($_GET['delete']);
//	if($chosenDeleteId){
//		$file = 'delete';
//	}
	
/* SHOPPING */
//	$basket = isset($_GET['shop']);
//	if($basket) $file = 'basket';
//	$count =0;
//	if(isset($_GET['basketAdd'])) include "basketAdd.php";	
//
//	if(isset($_GET["basketEmpty"])){
//		session_start();
//		unset($_SESSION["basket"]);
//		unset($_SESSION["cart"]);
//		$_SESSION["basket"] = array();
//		$_SESSION["cart"] = array();
//	}


return $out;