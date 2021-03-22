<?php

return search();

function search(){
	include "connect.php";
	include_once "./class/plant.class.php";

	if(isset($_POST["searchField"])){
		$srch = $_POST["searchField"];

		$qry= "SELECT * FROM tbl_plants WHERE name LIKE '%$srch%' OR family LIKE '%$srch%'";
		$res= mysqli_query($con,$qry) or die("SELECTING FAILED : search");
	
		$out = "<div id='gallery' class='d-block mx-auto'>";
		
		while($dbRow= mysqli_fetch_array($res)){
			$id = $dbRow['id'];
			$name = $dbRow['name']; 
			$img = $dbRow['img'];
	
    	    if(substr($img, 0, 4) == "http") {
    	      $out .= include("./template/galleryItemLINK.php");
    	    }else{
    	      $out .= include("./template/galleryItemIMGFOLDER.php");
    	    }
		}
		$out .= "</div>";
	}else $out = ""; 


	return $out;
}
?>