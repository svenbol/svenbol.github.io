<?php
           
return
toonAfbeeldingen();

function toonAfbeeldingen()
{
	$out = "
	<hr class='hrTitel'><div class='hoofdtitel' ><H1><span>Gallery of Tracks</span></h1>
			<hr class='hrTitel'></div>";
	$out .= "<ul id='afbeeldingen'>";
	
	include("connect.php");

	$qry= "SELECT * FROM tbl_tracks ORDER BY name_track ASC" ;
	$res= mysqli_query($con,$qry) or die("kapot");

	while($rij= mysqli_fetch_array($res)){
		$id = $rij['id_track'];
		$name = $rij['name_track']; // ['naam van de rij in de databank']
		$link = $rij['link_track'];
		$src = $rij['img_track'];
		$artist = $rij['artist'];
		
		 // <img src ='img/$src' /><hr class='imghr'><span class='spanid'>$id</span><p id='fotonaam'>
        if(substr($src, 0, 4) == "http") {
          $out .= "<div id='foto'><li>
        				<a href='$link' alt='$src' target='_blank' >
        				    <img src ='$src' /><hr class='imghr'><span class='spanid'>$id</span>
        					<p id='fotonaam'>
        					    <span>$artist</span><br>
        					    <span>$name</span></a>
        					</p>
        				</li></div>";
        }else{
            $out .= "<div id='foto'>
        				<li><a href='$link' alt='$src' target='_blank' >
        				    <img src ='img/$src' /><hr class='imghr'><span class='spanid'>$id</span>
        					<p id='fotonaam'>
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

