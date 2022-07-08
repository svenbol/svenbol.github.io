<?php

return updateDb();

function updateDb(){
	//include "connect.php";
	include "../class/Item.class.php";
	$i = new Item();

		$server = "remotemysql.com";
		$user = "GsN8DgJAZN";
		$pass = "Wm5glX6EBD";
		$db = "GsN8DgJAZN";
		$table = "tbl_items";
	
		$con = new mysqli($server,$user,$pass,$db);

    if(isset($_POST['update'])){
		$id = $_GET['updateDb'];

		$qry = "UPDATE $table SET ";
			foreach($i as $prop => $val){
				if($prop !== 'id'){
					$i->$prop = $_POST["$prop"];
					$qry .= $prop;
					$qry .= " = ";
					$qry .= "'" . $i->$prop . "' ,";
				}
			}
		$qry = substr($qry,0,-1);
		$qry .= " WHERE id = '$id';";

    	$res = mysqli_query($con,$qry) or die("UPDATING FAILED : updateDb");
    	if ($res) return header("Location: ../index.php");
    }
}