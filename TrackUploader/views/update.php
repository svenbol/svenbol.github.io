<?php
$updateBtnClick = isset($_POST['submit2']);
if($updateBtnClick)
{
	$output = opladen();
}
else
{
	$output = include_once "views/upload-form.php";
}
return $output;

function update(){
    /*
	include_once "classes/oplader.class.php";
	$oplader = new oplader( "image-data" );
	$oplader->saveIn("img"); // Mapje waarin opgeslagen moet worden
	$fileUploaded = $oplader->save();
	*/
	include_once "connect.php";

	$name=$_POST["image-name"];	
	$imgname= $_FILES["image-data"]["name"];
	$link=$_POST["track-link"];
	$artist=$_POST["artist"];
	
	$qry="INSERT INTO tbl_tracks (name_track, img_track,artist, link_track) VALUES ('$name','$imgname','$artist','$link')";
	mysqli_query($con,$qry) 						or die('Uitvoeren query mislukt upload ' . $imgname);
	
	
	
	if ($fileUploaded) {
		$out = "<span>Track uploaded!</span>
				<a href='index.php?pagina=gallerij'>Check the gallery!</a>
				</span>";
	} else {
		$out = "<span>Something went wrong.</span>
				<span>
				    <a href='index.php?pagina=upload'>Retry.</a>
				</span>
		";
	}
	return $out;
	}
?>