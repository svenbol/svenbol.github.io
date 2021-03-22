<?php

return galleryMeal();

function galleryMeal(){
	include "connect.php";
	include_once "./class/Meal.class.php";

	$c->table = 'tbl_meals';

	$i = new Meal();

	$qry= "SELECT * FROM $c->table ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : gallery");

	$out = "<div id='galleryMeal' class='row mx-auto'>";

	while($dbRow= mysqli_fetch_array($res)){
		foreach($i as $prop => $val) $i->$prop = $dbRow[$prop];
		
        if(substr($i->img, 0, 4) == "http") $out .= include("./template/galleryMealLINK.php"); 
       	else 							 	$out .= include("./template/galleryMealIMG.php"); 
	}


	$out .= "</div>";
	return $out;
}
?>
