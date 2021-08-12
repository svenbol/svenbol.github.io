<?php
session_start();


return detailItemUpdate();

function detailItemUpdate(){
	include_once "connect.php";
	include_once "./class/plant.class.php";
	$i = new Plant();
	$id = $_SESSION["chosenDetail"];

	echo "DETAIL ITEM ID: $id";
	
	if(isset($_POST["update"])){

	/*
		$query = "UPDATE tbl_plants SET 
										humidity = '$humidity',
										water = '$water',
										waterWinter = '$waterWinter',
										waterSummer = '$waterSummer',
										acidityMin = '$acidityMin',
										acidityMax = '$acidityMax',
										sun = '$sun',
										tempMin ='$tempMin',
										tempMax= '$tempMax',
										nutritionWhat = '$nutritionWhat',
										nutritionFreq = '$nutritionFreq',
										pruningWhat = '$pruningWhat',
										repotWhen = '$repotWhen',
										toxicity = '$toxicity',
										extra = '$extra'
										WHERE id LIKE $id;
										 ";
	*/	
									
		$query = "UPDATE tbl_plants SET ";
			foreach($i as $prop => $val){
				if($prop !== 'id'){
					if(!empty($_POST["$prop"])){
						$i->$prop = $_POST["$prop"];
													
						$query .= $prop;
						$query .= " = ";
						$query .= "'" . $i->$prop . "' ,";
					}
				}
			}

		$query = substr($query,0,-1);
		$query .= " WHERE id LIKE '$id';";
	
		echo " <br> QUERY:: $query <br> ";

		$res = mysqli_query($con,$query) or die("UPDATE FAILED : detailItemUpdate");
		if($res) return header("Location: ../index.php");
	
	}
	else if(isset($_POST["delete"])){
		echo "delete true";
		$query = "DELETE FROM tbl_plants WHERE id LIKE '$id'";
		$res = mysqli_query($con,$query) or die("DELETE FAILED : detailItemUpdate");

		/* AUTO FIX ID's */
			$qryIdFix1 = "SET  @num := 0";
			$qryIdFix2 = "UPDATE tbl_plants SET id = @num := (@num+1)";
			$qryIdFix3 = "ALTER TABLE tbl_plants AUTO_INCREMENT =1";
			
			$res1 = mysqli_query($con,$qryIdFix1) or die ('Cannot reset auto increment : delete : 1');
			$res2 = mysqli_query($con,$qryIdFix2) or die ('Cannot reset auto increment : delete : 2');
			$res3 = mysqli_query($con,$qryIdFix3) or die ('Cannot reset auto increment : delete : 3');

		if($res) header("Location: index.php");
	}
	else{
		$qry = "SELECT * FROM tbl_plants WHERE id LIKE '$id'";
		$res = mysqli_query($con,$qry) or die("SELECT FAILED : detailItemUpdate");

		while($dbRow=mysqli_fetch_array($res)){
			foreach($i as $prop => $val){
				$i->$prop = $dbRow["$prop"];
				
				$_SESSION["details"] = $i;
			}
		}

		$page = include ("./template/detailItemUpdatePage.php");
		return $page;
	} 

	
}
	