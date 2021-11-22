<?php
return "
<div class='itemz row border border-success'>
	<a href='../index.php?plant=$id' alt='$img' class='d-inline-block col-3 border-right border-success text-center'>
	<img class='mx-auto' style='max-height:60px' src='$img' /> </a>
	<div class='col-6 pt-3 border-right border-success'><p class='text-center'>$name</p></div>
	<div class='col-3 pt-3 border-right border-success'><p class='minTemp text-center'>$minTemp</div>
</div>
";