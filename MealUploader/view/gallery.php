<?php

return gallery();

function gallery(){
	include "connect.php";
	include_once "./class/item.class.php";

	$i = new Item();

	$qry= "SELECT * FROM $c->table ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : gallery");

	$out = "<div id='gallery' class='w-100 d-block mx-auto'>";

	while($dbRow= mysqli_fetch_array($res)){
		foreach($i as $prop => $val) $i->$prop = $dbRow[$prop];
		

		//$o = $i->$prop;
		//echo "$prop $o";
		
        if(substr($i->img, 0, 4) == "http") $out .= include("./template/galleryItemLINK.php"); 
       	else 							 	$out .= include("./template/galleryItemIMG.php"); 
	}


	$out .= "</div>";
	return $out;
}
?>
