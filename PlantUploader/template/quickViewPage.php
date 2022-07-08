<?php
return "
<a href='../index.php?plant=$id' alt='$img' class='d-inline-block col-4 mx-auto px-2 align-top font-weight-bold text-center mainColor mainBorder'>
	<div id='item' class='' style='background-image:url($img)'>
    	<p id='itemName' class='text-light mb-0 text-center w-100'>$name</p>
	</div>
</a>
<div class='col-7 text-center'>
	<div class='row'>
		<div class='col-3 mainColor mainBorder font-weight-bolder'> Humid </div>
		<div class='col-3 mainColor mainBorder font-weight-bolder'> Water </div>
		<div class='col-3 mainColor mainBorder font-weight-bolder'> Sun </div>
		<div class='col-3 mainColor mainBorder font-weight-bolder'> -°C </div>
	</div>
	<div class='row mainBorderLeft mainBorderRight'>
		<div class='col-3 bg-dark mainBorderBottom'> $humidity </div>
		<div class='col-3 bg-dark mainBorderBottom mainBorderLeft'> $water </div>
		<div class='col-3 bg-dark mainBorderBottom mainBorderLeft'> $sun </div>
		<div class='col-3 bg-dark mainBorderBottom mainBorderLeft'> $tempMin </div>
	</div>
	<div class='row mainBorderBottom'>
		<div class='col-3 mainColor mainBorder font-weight-bolder'> Nutri </div>
		<div class='col-3 bg-dark pt-1' style='font-size:18px'> $nutritionWhat </div>
		<div class='col-3 bg-dark pt-1' style='font-size:18px'> $nutritionFreq </div>
		<div class='col-3 mainColor mainBorder'>  </div>
	</div>
</div>
";

