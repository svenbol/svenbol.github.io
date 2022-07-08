<?php 

return ideaGallery();

function ideaGallery(){
	require "connect.php";
	require "./class/plant.class.php";

	$qry = "SELECT id,name,img,link FROM tbl_plants_ideas";
	$res = mysqli_query($con,$qry) or die ("SELECTING FAILED : idea");

	$out = "<div class='row mainColor mainBorder mb-2 p-2'>
				<h3 class='mx-auto'>Upload an interest</h3>
			</div>
			<div class='row'>";
	$out .= include("./views/ideaForm.php");
	$out .= "</div>
			<div class='row mainColor mainBorder mb-2 p-2'>
				<h3 class='mx-auto'>Interests</h3>
			</div>
			<div class='row'>";

	while($row = mysqli_fetch_array($res)){
		$id = $row['id'];
		$name = $row['name'];
		$img = $row['img'];
		$link = $row['link'];

		$out .= include("./template/ideaItem.php");
	}

	$out .= "</div></div>";
	$out .= include('./template/ideaJS.php');

	return $out;
}