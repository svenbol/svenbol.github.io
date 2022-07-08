<?php

return quickView();

function quickView(){
	include "connect.php";
	include_once "./class/plant.class.php";

	$qry= "SELECT * FROM tbl_plants ORDER BY name ASC" ;
	$res= mysqli_query($con,$qry) or die("SELECTING FAILED : gallery");

	$out = "<div id='quickView' class='container d-block mx-auto mainBorderBottom'>";
	$counter = 1;
	
	while($dbRow= mysqli_fetch_array($res)){
		
		/* init */
		$id = $dbRow['id'];	
		$img = $dbRow['img'];						
		$name = $dbRow['name']; 
		$humidity = $dbRow['humidity']; 			
		$water = $dbRow['water'];
		$nutritionWhat = $dbRow['nutritionWhat']; 	
		$nutritionFreq = $dbRow['nutritionFreq'];
		$acidityMin = $dbRow['acidityMin']; 		
		$acidityMax = $dbRow['acidityMax'];
		$tempMin = $dbRow['tempMin'];				
		$sun = $dbRow['sun'];

		/*
		if(strlen($name)>19){
			substr($name,0,17);
			$name .= '..';
		}
		*/

		/* update */
		switch($humidity){
			case 'Humid':
				$humidity = '*****';
				break;
			case 'Neutral':
				$humidity = '***';
				break;
			case 'Dry':
				$humidity = '*';
				break;
		}

		switch($water){
			case 'Moisty soil':
				$water = '*****';
				break;
			case 'Slightly moist soil':
				$water = '****';
				break;
			case 'Almost dry soil':
				$water = '**';
				break;
			case 'Dry soil':
				$water = '*';
				break;
			case 'Always water in the calyx':
				$water = 'Calyx';
				break;
			case 'Dry soil for half a week':
				$water = '*';
				break;
			case 'Dry soil for a week':
				$water = '*';
				break;
			case 'Dry soil for 2 weeks':
				$water = '*';
				break;
			case 'Dry soil for a month':
				$water = '*';
				break;
			
			
		}
	
		switch($sun){
			case 'Full Sun':
				$sun = 'Sun';
				break;
			case 'Full Shadow':
				$sun = 'Shade';
				break;
			case 'Shadow':
				$sun = 'Shade';
				break;
			default:
				$sun = $sun;
				break;
		}
		
		switch($nutritionWhat){
			case 'Organic Soil':
				$nutritionWhat = 'Organic';
				break;
			/* LATER ADDED - update in db first 20 */ 
			case 'Green Plants':
				$nutritionWhat = '7-3-6';
				break;
			case 'Herb Fertilizer':
				$nutritionWhat = '7-3-6';
				break;
			case 'Herb':
				$nutritionWhat = '7-3-6';
				break;
			case 'Green Plant':
				$nutritionWhat = '7-3-6';
				break;
			case 'Palm Feed':
				$nutritionWhat = '6-1-3';
				break;
			case 'Organic soil':
				$nutritionWhat = 'Organic';
				break;
			case 'Flies in calyx':
				$nutritionWhat = 'Flies';
				break;

		}
		/* extra changes */ 

		switch($nutritionFreq){
			case 'Yearly':
				$nutritionFreq = 'Yearly';
				break;
			case 'Every 6 months':
				$nutritionFreq ='6month';
				break;
			case 'Twice a year':
				$nutritionFreq ='6month';
				break;
			case 'Every 3 months':
				$nutritionFreq ='3month';
				break;
			case 'Every 2 months':
				$nutritionFreq ='2month';
				break;
			case 'Monthly':
				$nutritionFreq = 'Monthly';
				break;
			case 'Every 2 weeks':
				$nutritionFreq = '2weekly';
				break;
			case 'Weekly':
				$nutritionFreq = 'Weekly';
				break;
			case 'Feed on repot':
				$nutritionFreq = '/Repot';
				break;
			case 'Yearly / Not':
				$nutritionFreq = 'Ever';
				break;
			case 'Once':
				$nutritionFreq ='Yearly';
				break;
		}

		/* draw */
		$out .= "<div class='row mb-2'>";
        $out .= include("./template/quickViewPage.php");
		$out .= "</div>"; 

	}

	$out .= "</div>";

	return $out;

}
?>