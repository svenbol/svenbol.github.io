<?php

		
		//$id = mysqli_real_escape_string($con,$_POST['id']);
		$name = $_POST['name']; 
		$gram = $_POST['gram'];
		$carbs = $_POST['carbs'];
		$sugars = $_POST['sugars'];
		$fats = $_POST['fats'];
		$price = $_POST['price'];
		$photo = $_POST['photo'];
		$store = $_POST['store'];
		$category = $_POST['category'];
		$tags = $_POST['tags'];

		include("connect.php");
	
		$qry="INSERT INTO tbl_voeding (name,gram,carbs,sugars,fats,price,photolink,store,category,tags) 
		VALUES ('$name','$gram','$carbs','$sugars','$fats','$price','$photo','$store','$category','$tags')";

		mysqli_query($con,$qry) 						or die('Uitvoeren query mislukt upload ');



		//header("Location: file://uploadform.php"); /* Redirect browser */

		/* Make sure that code below does not get executed when we redirect. */
		//exit;
?>