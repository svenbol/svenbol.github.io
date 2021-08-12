<?php

	return basket();

	if(isset($_GET["basketEmpty"])){
		unset($_SESSION["basket"]);
		unset($_SESSION["cart"]);
		$_SESSION["basket"] = array();
		$_SESSION["cart"] = array();
	}
	
	function basket(){
		include_once "connect.php";
	    include_once "./class/Item.class.php";
	    include_once "./class/BasketItem.class.php";

	    session_start();
	    $i = new Item();

	    if(isset($_SESSION["cart"])){
			$page = "<div id='basket' class='w-100 center bg-maison container'>";
			$page .= "<div class='row mb-4 shade'>
						<h4 class='center col-1 pt-3'> IMG </h4>
						<h4 class='center col-3 pt-3'> NAME </h4>
						<h4 class='center col-3 pt-3'> AMOUNT </h4>
						<h4 class='center col-3 pt-3'> TOTAL </h4>
					</div>";

			foreach($_SESSION["cart"] as $item => $val){
				$qry= "SELECT * FROM $c->table WHERE id LIKE $item";
				$res= mysqli_query($con,$qry) or die ("SELECTING FAILED");

				while($dbRow = mysqli_fetch_array($res)){
					$bi = new BasketItem();
						$bi->itemId = $item;
						$bi->qty = $val;

					foreach($i as $prop => $val) 
						$i->$prop = $dbRow["$prop"];
						
					$subTotal[$i->id] = $i->price * $bi->qty;	
					$thisSubTotal = $subTotal[$i->id];				

					$page .= include ("./template/basketItemRow.php");
				}
			}


			$total = 0;
			if(isset($subTotal)) foreach($subTotal as $sum) $total += $sum;

			$page .= "<br>
			<div class='row bg-black'> 
				<a class='col-3 invertImg' href='?basketEmpty=true'><img height='35px' class='mt-3' alt='Empty Basket' src='https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png'></a>
				<span class='col-6 pt-3 font-italic shade'> Please buy more!</span>
				<h4 class='col-3 center p-3'> € $total </h4>
			</div>";

			$page .= "</div>";
			return $page;
	    }else{ 
	    	$page = "<div id='basket' class='w-100 center bg-maison container'>";
			$page .= "<div class='row mb-4 shade'>
						<h4 class='center col-1 pt-3'> IMG </h4>
						<h4 class='center col-3 pt-3'> NAME </h4>
						<h4 class='center col-3 pt-3'> AMOUNT </h4>
						<h4 class='center col-3 pt-3'> TOTAL </h4>
					</div>";
			$page .= "</div>";
			return $page;
	    } 
	    //header("Location: ./index.php");

	    
	    
	}


?>