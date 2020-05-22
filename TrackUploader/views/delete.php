<?php
$btnDelete = isset($_POST['submit']);
$btnUpdate = isset($_POST['submit2']);
$btnUpdateSend = isset($_POST['updatez']);

$output = include_once "views/delete-form.php";

if($btnDelete) $output = verwijder();
if($btnUpdate) $output = getTrackById();
if($btnUpdateSend) $output = updater();

return $output;

function getTrackById(){
	include_once "connect.php";
	$id=$_POST['id'];
	
        $qrySelect="SELECT * FROM tbl_tracks WHERE id_track='$id'";
    	$res=mysqli_query($con,$qrySelect) or die('Track opvragen kapot! ');
    
    	while($rij2=mysqli_fetch_array($res)){
    		$id = $rij2['id_track'];
    		$name = $rij2['name_track']; // ['naam van de rij in de databank']
    		$link = $rij2['link_track'];
    		$src = $rij2['img_track'];
    		$artist = $rij2['artist'];
    
    //action='index.php?pagina=delete'enctype='multipart/form-data'
    		$out = "
    		<hr class='hrTitel'>
    		<div class='hoofdtitel'><h1><span> Update Track </span></h1></div>
    		<hr class='hrTitel'>
    		<form method='post'> 
    		<table class='updatetable'>
    				<tr><td><span>Id:</span> $id <hr></td>
    					<td><input type='text' name='_id' value='$id' maxlength='2'> <hr></td></TR>
    
    				<TR><td><span>Name:</span> $name <hr></td>
    					<td><input type='text' name='_name' value='$name' maxlength='28'></td></tr>
    
    				<tr><td><span> Artist: </span> $artist <hr></td>
    					<td><input type='text' name='_artist' value='$artist' maxlenght='28'></td></tr>
    
    				<tr><td><span class='updatetracklink'> Tracklink:</span> $link <hr></td>
    					<td><input type='text' name='_link' value='$link'></td></tr>
    
    				<tr><td><span> Imagesource: </span> $src <hr></td>
    					<td><input type='text' name='_src' value='$src'></td></tr>
    
     				<tr><td><input type='submit' name='updatez' value='Update'  /></td></tr></table>
    		</form>";
      
        
    	return $out;
    }
}

function updater(){
    include_once "connect.php";
	$id=$_POST['_id'];
	$name = $_POST['_name'];
	$img=$_POST['_src'];
	$artist=$_POST['_artist'];
	$link=$_POST['_link'];

	$qryUpdate="UPDATE `tbl_tracks` SET `name_track`='$name',`img_track`='$img',`artist`='$artist',`link_track`='$link' WHERE `id_track`= $id";
	$res=mysqli_query($con,$qryUpdate) or die('Track UPDATER() kapot! ');
	
	header("Location: https://svenbol.000webhostapp.com/TrackUploader/index.php?pagina=gallerij");
    die();
	/*
	$outUpdate = "<div class='hoofdtitel' ><h1><span>Track Update! </span></h1>
                <hr class='hrTitel'></div>
	            <span> Track updated!</span>
				<span>
				    <a href='index.php?pagina=gallerij'>Check the gallery!</a>
				</span>";
	return $outUpdate;*/
}

function verwijder(){
	include_once "connect.php";
	$id=$_POST['id'];

	$qryDelete="DELETE FROM tbl_tracks WHERE id_track='$id'";
	$res2=mysqli_query($con,$qryDelete) or die('Query delete kapot');

	$outdelete = "
	            <div class='hoofdtitel' ><h1><span>Track Deleted ! </span></h1>
                <hr class='hrTitel'></div>
	            <span> Track deleted!</span>
				<span>
				    <a href='index.php?pagina=gallerij'>Check the gallery!</a>
				</span>";


	return $outdelete;
}

?>