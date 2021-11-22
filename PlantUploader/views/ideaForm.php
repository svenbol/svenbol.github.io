<?php
include "ideaUpload.php";

return ideaForm();

function ideaForm(){
	require "connect.php";


	$qry = "SELECT id,name,img FROM tbl_plants";
	$res = mysqli_query($con,$qry) or die("SELECTING FAILED : ideaForm");

	$out = "
	<form class='ideaForm row py-3 mb-2' method='post' enctype='multipart/form-data'>
		<div class='col-4'>
			<p class='italic'> Add info: </p>
			<h5>Title:</h5>
			<input type='text' name='name' class='d-block' placeholder='Title . . .'>
			<br>
			<h5>Link:</h5>
			<input type='text' name='link' class='d-block' placeholder='https://www.link.be'>
			<br>
			<input type='submit' class='d-block mx-auto ' name='uploadIdea' style='position:absolute;bottom:12px;left:30px' value='ADD'>
			
		</div>
		<div class='col-8'><p class='italic'> Choose image:</p>";

		$nr = 0;

		while($row = mysqli_fetch_array($res)){
			$id = $row['id'];
			$name = $row['name'];
			$img = $row['img'];
			
			$count = 'plantImg';
			$count .= $nr;
	
			$out .= "<input type='checkbox' id='$count' name='img' value='$img' class='checkPlantImg' >
					 <label for='$count' style='background-image:url($img)'></label>
			";

			$nr++;
		}
	$out .=	"
		</div>
	</form>";

	return $out;
}