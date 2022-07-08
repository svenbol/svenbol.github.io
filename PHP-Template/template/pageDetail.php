<?php

$i = $_SESSION['chosenItem'];

return "
	<div id='detail' class='center'>
		<span class='center col-md-8'>$i->id</span>
		<img class='detailImg center col-md-6' width='50px' height='50px' src='$i->img'>
		<span class='center col-md-8'>$i->name</span>
		<span class='center col-md-8'>€ $i->price</span>
		<div class='center col-md-8 invertImg container'>
		<div class='row'>
			<a class='centerInline col-4' href='?update=$i->id'><img class='my-1' width='40px' height='40px' src='https://cdn.iconscout.com/icon/free/png-512/update-1779719-1512754.png'></a>
			<a class='centerInline col-4' href='?basketAdd=$i->id'><img class='my-1' width='40px' height='40px' src='https://cdn0.iconfinder.com/data/icons/game-ui-casual-chunky/533/IconsByAndreaFryer_GameUI_Chunky_Inventory-512.png'></a>
			<a class='centerInline col-4' href='?delete=$i->id'><img class='my-1' width='40px' height='40px' src='https://static.thenounproject.com/png/5493-200.png'></a>
		</div>
		</div>

	</div>
	";