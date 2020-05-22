<?php
include_once "connect.php";

if(isset($_POST["submit"])){

        $name=$_POST["image-name"];	
	    /*
	    $imgname= $_FILES["image-data"]["name"];
	    $image = $_FILES['image-data']['tmp_name'];
	    */
	    $imgname = $_POST["image-data"]; // IMG als link --> free hosting laat geen Save File toe ( php.ini )
	    $link=$_POST["track-link"];
	    $artist=$_POST["artist"];
        
        
        $qry="INSERT INTO tbl_tracks(name_track, img_track, artist, link_track) VALUES ('$name','$imgname','$artist','$link')";
        
        $res = mysqli_query($con,$qry) or die('KAPOT QUERY KAPOT');


        //if(mysqli_query($con,$qry)){
        if($res){
            /*
            $out = "<span>Track uploaded!</span>
				<a href='index.php?pagina=gallerij'>Check the gallery!</a>
				</span>";
			*/
			header("Location: index.php");
        }else{
            $out = "<span>Something went wrong.</span>
				<span>
				<a href='index.php?pagina=upload'>Retry.</a>
				</span>";
        }
        return $out;
    //}
}
else{
    $output = include_once 'upload-form.php';
    return $output;
}
/*
function opladen(){
    
	include_once "classes/oplader.class.php";
	$oplader = new oplader("image-data");
	//$oplader->saveIn("img"); // Mapje waarin opgeslagen moet worden              
	$fileUploaded = $oplader->save();
	
	
	include_once "connect.php";

	$name=$_POST["image-name"];	
	$imgname= $_FILES["image-data"]["name"];
	$link=$_POST["track-link"];
	$artist=$_POST["artist"];
	
	$qry="INSERT INTO tbl_tracks (name_track, img_track,artist, link_track) VALUES ('$name','$imgname','$artist','$link')";
	mysqli_query($con,$qry) or die('Uitvoeren query mislukt upload ' . $imgname);
	
    if ($qry) {
        
	    $iname = $_FILES['image-data']['name'];
	    $isize = $_FILES['image-data']['size'];
	    $itmp = $_FILES['image-data']['tmp_name'];
	    $itype = $_FILES['image-data']['type'];
	    
	    if(move_uploaded_file($itmp, "/img/" . basename($imgname))){
	        echo 'succes BOJO ----- ';
	    }else{ echo 'weer pech -------- ';}
	   
	    
		$out = "<span>Track uploaded!</span>
				<a href='index.php?pagina=gallerij'>Check the gallery!</a>
				</span>";
    } 
   else {
		$out = "<span>Something went wrong.</span>
				<span>
				<a href='index.php?pagina=upload'>Retry.</a>
				</span>";
	}
	
	//return $out;
}
*/
/*
$newImageSubmitted = isset($_FILES["image-data"]);
$submit = isset($_POST["submit"]);

if($submit)
{
	//$output = opladen();
	
	include_once "connect.php";

	$name=$_POST["image-name"];	
	$imgname= $_FILES["image-data"]["name"];
	$link=$_POST["track-link"];
	$artist=$_POST["artist"];
	
	$qry="INSERT INTO tbl_tracks (name_track, img_track,artist, link_track) VALUES ('$name','$imgname','$artist','$link')";
	mysqli_query($con,$qry) or die('Uitvoeren query mislukt upload ' . $imgname);
	
    if($qry){
	    $out = "<span>Track uploaded!</span>
				<a href='index.php?pagina=gallerij'>Check the gallery!</a>
				</span>";
    } 
    else {
		$out = "<span>Something went wrong.</span>
				<span>
				<a href='index.php?pagina=upload'>Retry.</a>
				</span>";
	}
	return $out;
}
else
{
	$output = include_once "views/upload-form.php";
	return $output;
}
//return $output;


*/
?>