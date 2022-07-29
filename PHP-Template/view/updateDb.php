<?php

return updateDb();

function updateDb(){
	include "connect.php";
	include "../class/Item.class.php";
	$i = new Item();
<<<<<<< Updated upstream

	
		$con = new mysqli($c->server,$c->user,$c->pass,$c->db);
=======
	
	$con = new mysqli($c->server,$c->user,$c->pass,$c->db);
>>>>>>> Stashed changes

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