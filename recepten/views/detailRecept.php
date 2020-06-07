<?php

$id = $_GET['id'];

$out = "";
	
include("connect.php");
$qry= "SELECT * FROM tbl_recepten WHERE id='$id'" ;
$res= mysqli_query($con,$qry) or die("query kapot");
while($rij= mysqli_fetch_array($res)){
        $name = $rij['name'];
		$photo = $rij['photo'];
		$ingredients = $rij['ingredients'];
		$gram = $rij['gram'];
		$description = $rij['description'];
		$pretime = $rij['pretime'];
		$dotime = $rij['dotime'];
		$kitchmat = $rij['kitchmat'];
		
		$totaltime = $pretime + $dotime; // minuts
}
		
		//$ingredient = explode(' ',$ingredients); // kap string in stukskes per spatie
		//$gramz = explode(' ',$gram);

$out .= "
<div class='container'
    <p class='text-center h1'> $name </p>
    <div class='col-sm-3 d-inline-block'>
        <hr>
        <p> <i class='far fa-clock'></i> $totaltime :: pre $pretime :: do $dotime </p>
        <ul>";
        
        //for($i;$i<count($ingredient);$i++){
        //    $out .= "<li>$ingredient[$i] :: $gramz[$i]</li>";
        //}
$out .="
        </ul>
    </div>
    
    <div class='col-sm-8 d-inline-block'>
        <img src='$photo'>
    </div>

</div>
";

echo $out;

?>