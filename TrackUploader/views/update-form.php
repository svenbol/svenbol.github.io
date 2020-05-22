<?php
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

		$out = "
		<hr class='hrTitel'>
		<div class='hoofdtitel'><h1><span> Update Track </span></h1></div>
		<hr class='hrTitel'>
		<form method='get' action='index.php?pagina=delete' >
		<table class='updatetable'>
				<tr><td><span>Id:</span> $id <hr></td>
					<td><span style='background:none'></span> <hr></td></TR>

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
    }
	return $out;
	
	
}
?>