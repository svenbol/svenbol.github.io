<?php
           
//return
//toonAfbeeldingen();

//function toonAfbeeldingen()
//{	
	include("connect.php");

	$qry= "SELECT * FROM tbl_voeding ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("query kapot");

	$out = "";

	while($rij= mysqli_fetch_array($res)){
		$id = $rij['id'];
		$name = $rij['name']; // ['naam van de rij in de databank']
		$gram = $rij['gram'];
		$carbs = $rij['carbs'];
		$sugars = $rij['sugars'];
		$fats = $rij['fats'];
		$price = $rij['price'];
		$photo = $rij['photolink'];
		$store = $rij['store'];
		$category = $rij['category'];
		
		if($gram > 0 && $price > 0)	
			{
				$ppkg = $price * (1000/$gram);
				$ppkg = number_format($ppkg,2);
			}
		else 	$ppkg = "€€€";

		$out .= "
				<div class='card border border-primary d-inline-block col-md-3  col-sm-10 col-10 ml-5 mt-2 mb-2 h-50'>
				 	<img src ='$photo' class='card-img-top border-bottom border-3 border-primary h-75' >
					<div class='bottom-left'>
					    <b>$id</b>
					</div>
					<div class='card-body'>
					    
					    <p>$name $category</p> 
						<p>$store <b><i>$ppkg/kg</i></b></p>
  					</div>
				</div>
				";
	}
	echo $out;
//}
?>