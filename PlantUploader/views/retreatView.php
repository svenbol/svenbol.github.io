<?php 

return retreat();

function retreat(){
	require "connect.php";
	require "./class/plant.class.php";

	$qry = "SELECT id,name,img,tempMin FROM tbl_plants ORDER BY tempMin DESC";
	$res = mysqli_query($con,$qry) or die("SELECTING FAILED : retreat");
	$out = "
		<div class='row'>
			<div class='col-3'></div>
			<div class='col-6'><p class='coldestTemp text-center'> Refresh </p></div>
			<div class='col-3'></div>
		</div>
		<div class='row text-center mainColor font-italic'>
			<div class='col-3  mainBorder'><h3> IMG </h3></div>
			<div class='col-6  mainBorder'><h3> PLANTS </h3></div>
			<div class='col-3  mainBorder'><h3> -°C </h3></div>
		</div>
	";

	while($row = mysqli_fetch_array($res)){
		$id = $row['id'];
		$name = $row['name'];
		$img = $row['img'];
		$minTemp = $row['tempMin'];

		$out .= include("./template/retreatItem.php");
	}

	$out .= include('./template/retreatJS.php');
	$out .= "<div></div>";

	return $out;
}

?>