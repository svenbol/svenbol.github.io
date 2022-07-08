<?php

return gallery();

function gallery(){
	include "connect.php";
	include_once "./class/Item.class.php";

	$i = new Item();

	$qry= "SELECT * FROM $c->table ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : gallery");

	$out = "<div id='gallery' class='w-100 d-block mx-auto'>";

	$rowCount = 1;

	while($dbRow= mysqli_fetch_array($res)){
		foreach($i as $prop => $val) $i->$prop = $dbRow[$prop];
		

		//$o = $i->$prop;
		//echo "$prop $o";
		if($rowCount==1) $out .= "<div class='row m-0 p-0'>";
        
        if(substr($i->img, 0, 4) == "http") $out .= include("./template/galleryItemLINK.php"); 
       	else 							 	$out .= include("./template/galleryItemIMG.php"); 

       	if($rowCount==3) $out .= "</div>";

       	$rowCount++;
       	if($rowCount > 3) $rowCount = 1;
	}


	$out .= "</div>";
	return $out;
}
?>
