<?php

	basketAdd();

function basketAdd(){
    include "./class/basketItem.class.php";
    session_start();

    if(isset($_GET["basketAdd"])){ 
    	$id = $_GET["basketAdd"];
    	
    	if(!isset($_SESSION["basket"])) $_SESSION["basket"] = array(); 
    		
		$_SESSION["basket"][] = $id;
	}

	$_SESSION["cart"] = array_count_values($_SESSION["basket"]);

	
	
	//header("Location: ./view/basket.php");

	/* unimportant */
		/*
		echo "<br> CART:  <br>";
		print_r($_SESSION["cart"]);
		echo "<br> -------------------------------------------------------------------------- <br>";
		*/
}
	
?>


		