<?php

return ItemId();

function ItemId(){
	include "connect.php";
	include_once "./class/Item.class.php";
	
	$i = new Item();
	$upId = $_SESSION['chosenUpdateId'];
	
	$qry ="SELECT * FROM $c->table WHERE id LIKE $upId";
	$res = mysqli_query($con,$qry) or die ('Cannot find item in database - getItemId');

	while($row=mysqli_fetch_array($res)){
	           $i->id = $upId;
	           $i->name = $row['name'];
	           $i->img = $row['img'];
	   }

	$_SESSION['chosenItem'] = $i;
}