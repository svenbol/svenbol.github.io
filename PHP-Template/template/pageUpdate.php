<?php

$i = new Item();
$i = $_SESSION['chosenItem'];

$outz = "<form method='POST' action='./view/updateDb.php?updateDb=$i->id'>
			<div class='row head'>
				<span class='left col-md-4'>$i->id</span>
				<img class='' width='50px' height='50px' src='$i->img'>
			</div>";

foreach($i as $prop => $val){
	$outz .= "
			<div class='row'>
				<div class='left col-md-4'>$prop</div>
				<input name='$prop' class='rightInline col-md-4' type='text' value='$val'>
			</div>";


}

//unset($val);

$outz .= "
			<div class='row w-33'>
				<input type='submit' name='update'>
			</div>
		</form>" ;

return $outz;
