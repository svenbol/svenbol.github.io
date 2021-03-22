<?php
return "
	<div class='row'>
		<span class='center col-md-1'>$i->id</span>
		<img class='detailImg center col-md-1' height='50px' src='$i->img'>
		<span class='center col-md-3'>$i->name</span>
		<span class='center col-md-3'>$bi->qty</span>
		<span class='center col-md-3'>$thisSubTotal</span>
	</div>	
";

