<?php
include_once "connect.php";
include_once "../class/plant.class.php";

return gallery();

function gallery(){
	$qry= "SELECT * FROM tbl_plants ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : gallery");

	$out = "<div id='gallery'>";
	
	while($dbRow= mysqli_fetch_array($res)){
		$id = $dbRow['id'];
		$name = $dbRow['name']; 
		$family = $dbRow['family'];
		$img = $dbRow['img'];
		$humidity = $dbRow['humidity'];
		$water = $dbRow['water'];
		$waterWinter = $dbRow['waterWinter'];
		$waterSummer = $dbRow['waterSummer'];
		$acidityMin = $dbRow['acidityMin'];
		$acidityMax = $dbRow['acidityMax'];
		$sun = $dbRow['sun'];
		$tempMin = $dbRow['tempMin'];
		$tempMax = $dbRow['tempMax'];
		$tempMax = $dbRow['nutrition'];
		$pruning = $dbRow['pruning'];
		$repotting = $dbRow['repotting'];
		$toxicity = $dbRow['toxicity'];
		$extra = $dbRow['extra'];

        if(substr($img, 0, 4) == "http") {
          $out .= include_once("./template/galleryItem.php");
        }else{
            $out .= "<div id='item'>
        				<li><a href='$link' alt='$img' target='_blank' >
        				    <img src='img/$img' /><hr class='imghr'><span class='spanid'>$id</span>
        					<p id='itemName'>
        					    <span>$artist</span><br>
        					    <span>$name</span></a>
        					</p>
        				</li></div>";
        }
	}
	$out .= "</ul>";
	return $out;
}
?>
