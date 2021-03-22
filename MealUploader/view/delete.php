<?php 
	include "connect.php";
	include_once "./class/Item.class.php";

	$i = new Item();
	$id = $_GET['delete'];

	$qry ="DELETE FROM $c->table WHERE id LIKE $id";
	$res=mysqli_query($con,$qry) or die ('Cannot delete item - delete');

	$qryIdFix1 = "SET  @num := 0";
	$qryIdFix2 = "UPDATE $c->table SET id = @num := (@num+1)";
	$qryIdFix3 = "ALTER TABLE $c->table AUTO_INCREMENT =1";
	
	$res1 = mysqli_query($con,$qryIdFix1) or die ('Cannot reset auto increment : delete : 1');
	$res2 = mysqli_query($con,$qryIdFix2) or die ('Cannot reset auto increment : delete : 2');
	$res3 = mysqli_query($con,$qryIdFix3) or die ('Cannot reset auto increment : delete : 3');

	return header("Location: ./index.php");