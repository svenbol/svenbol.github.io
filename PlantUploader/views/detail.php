<?php

	return detail();

	function detail(){
		include "connect.php";
		include_once "./class/plant.class.php";

		$plant = $_SESSION['chosenPlant'];
		
		if(isset($_GET['plant'])){
			$qry= "SELECT * FROM tbl_plants WHERE id LIKE $plant";
			$res= mysqli_query($con,$qry) or die("SELECTING FAILED : detail");
	
			while($dbRow=mysqli_fetch_array($res)){
				$id = $dbRow['id'];
				$name = $dbRow['name']; 
				$img = $dbRow['img'];
				$family = $dbRow['family'];
				$humidity = $dbRow['humidity'];
				$water = $dbRow['water'];
				$waterWinter = $dbRow['waterWinter'];
				$waterSummer = $dbRow['waterSummer'];
				$acidityMin = $dbRow['acidityMin'];
				$acidityMax = $dbRow['acidityMax'];
				$sun = $dbRow['sun'];
				$tempMin = $dbRow['tempMin'];
				$tempMax = $dbRow['tempMax'];
				$nutritionWhat = $dbRow['nutritionWhat'];
				$nutritionWhen = $dbRow['nutritionWhen'];
				$nutritionFreq = $dbRow['nutritionFreq'];
				$pruningWhat = $dbRow['pruningWhat'];
				$pruningWhen = $dbRow['pruningWhen'];
				$repotWhen = $dbRow['repotWhen'];
				$repotFreq = $dbRow['repotFreq'];
				$toxicity = $dbRow['toxicity'];
				$extra = $dbRow['extra'];
	
				$out = include("./template/detailItemPage.php");
			}
			return $out;
		}else{
			header("Location ./views/index.php?page=gallery");
		}
	}
?>

