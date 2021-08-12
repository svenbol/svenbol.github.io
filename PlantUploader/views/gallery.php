<?php

return gallery();

function gallery(){
	include "connect.php";
	include_once "./class/plant.class.php";

	$qry= "SELECT * FROM tbl_plants ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : gallery");

	$out = "<div id='gallery' class='container d-block mx-auto'>";
	$counter = 1;
	
	while($dbRow= mysqli_fetch_array($res)){
		
		$id = $dbRow['id'];
		$name = $dbRow['name']; 
		$img = $dbRow['img'];
		/*	
			$family = $dbRow['family'];
			$humidity = $dbRow['humidity'];
			$water = $dbRow['water'];
			$waterWinter = $dbRow['waterWinter'];
			$waterSummer = $dbRow['waterSummer'];
			$acidityMin = $dbRow['acidityMin'];
			$acidityMax = $dbRow['acidityMax'];
			$sun = $dbRow['sun'];
			$tempMin = $dbRow['tempMin'];
			$tempMax = $dbRow['tempMax'];
			$nutrition = $dbRow['nutrition'];
			$nutriTime = $dbRow['nutriTime'];
			$pruning = $dbRow['pruning'];
			$repotting = $dbRow['repotting'];
			$toxicity = $dbRow['toxicity'];
			$extra = $dbRow['extra'];
		*/

		if($counter == 1) $out .= "<div class='row'>"; 

        if(substr($img, 0, 4) == "http") $out .= include("./template/galleryItemLINK.php");
        else $out .= include("./template/galleryItemIMGFOLDER.php");

        if($counter == 3) $out .= "</div>"; 


		$counter++;
		if($counter > 3) $counter = 1;
	}

	$out .= "</div>";

	return $out;
}
?>
