<?php
	$out = "";
	
	include("connect.php");

	$qry= "SELECT * FROM tbl_recepten ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("query kapot");

	while($rij= mysqli_fetch_array($res)){
		$id = $rij['id'];
		$name = $rij['name']; // ['naam van de rij in de databank']
		$photo = $rij['photo'];
		$ingredients = $rij['ingredients'];
		$gram = $rij['gram'];
		$description = $rij['description'];
		$pretime = $rij['pretime'];
		$dotime = $rij['dotime'];
		$kitchmat = $rij['kitchmat'];

		$totaltime = $pretime + $dotime; // minuts
		
		// $ingredient = explode(' ',$ingredients);
		// $gramz = explode(' ',$gram) ;
		 // <img src ='img/$src' /><hr class='imghr'><span class='spanid'>$id</span><p id='fotonaam'>

		$out .= "
				<div class='card border border-primary d-inline-block col-md-3 col-sm-10 ml-5 mt-2 mb-2'>
				<a href='views/detailRecept.php?id=$id'>
				 	<img src ='$photo' class='card-img-top border-bottom border-3 border-primary' >
				</a>
					<div class='card-body'>
						<p>$name tijd: $totaltime</p> 
						<p>$description</p>
						<p>$id</p>    		
						
  					</div>
  			
				</div>
			
				";
		$out .= "";
	}
	echo $out;
?>