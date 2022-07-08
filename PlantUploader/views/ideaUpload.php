<?php 
include_once "connect.php";
include_once "./class/Idea.class.php";

if(isset($_POST["uploadIdea"])){
	$i = new Idea();
	echo("ERRO");

	$i->name = $_POST["name"];
	$i->link = $_POST["link"];
	$i->img = $_POST["img"];
	
	$qry = "INSERT INTO tbl_plants_ideas(name,link,img)VALUES('$i->name','$i->link','$i->img')";
	$res = mysqli_query($con,$qry) or die ('INSERT|UPLOAD FAILED : upload idea');

	if($res)header("Location: index.php?page=ideaGallery");
	else echo("ERROR ERROR");
}