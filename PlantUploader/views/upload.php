<?php 
include_once "connect.php";
include_once "../class/plant.class.php";

if(isset($_POST["upload"])){
	// Plant Class
	$p = new Plant();
	// Identificatie
    $p->name = $_POST["name"];	
	$p->family = $_POST["family"];
	$p->img = $_POST["img"];
	// Onderhoud water
	$p->humidity = $_POST["humidity"];
	$p->water = $_POST["water"];
	$p->waterWinter = $_POST["waterWinter"];
	$p->waterSummer = $_POST["waterSummer"];
	$p->acidityMin = $_POST["acidityMin"];
	$p->acidityMax = $_POST["acidityMax"];
	// Onderhoud zon
	$p->sun = $_POST["sun"];
	$p->tempMin = $_POST["tempMin"];
	$p->tempMax = $_POST["tempMax"];
	// Verzorging
	$p->nutrition = $_POST["nutrition"];
	$p->pruning = $_POST["pruning"];
	$p->repotting = $_POST["repotting"];
	// Info
	$p->toxicity = $_POST["toxicity"];
	$p->extra = $_POST["extra"];
       
    $qry="INSERT INTO tbl_plants(name,family,img,humidity,water,waterWinter,waterSummer,acidityMin,acidityMax,sun,tempMin,tempMax,nutrition,pruning,repotting,toxicity,extra) 
    		VALUES ('$p->name','$p->family','$p->img','$p->humidity','$p->water','$p->waterWinter','$p->waterSummer','$p->acidityMin','$p->acidityMax','$p->sun','$p->tempMin','$p->tempMax','$p->nutrition','$p->pruning','$p->repotting','$p->toxicity','$p->extra')";
       
    $res = mysqli_query($con,$qry) or die('INSERT|UPLOAD FAILED : upload');
 
    if($res)header("Location: index.php");
    else return "<span>Something went wrong.</span>";
}
else{
    $output = include_once 'upload-form.php';
    return $output;
}

