<?php
return "
<hr class='hrTitel'>
<div class='hoofdtitel' ><h1><span>Moderate by track id</span></h1>
<p class='subtitel'>Track id can be found in the lower left corner of the picture.</p><hr class='hrTitel'></div>
<form method='post' enctype='multipart/form-data' >
	
	<p align='center'>
	<input type='number' name='id' placeholder='ID' maxlength='5' class='idinput'>

    <input type='submit' name='submit2' value='Update ID'  />
	<input type='submit' name='submit' value='Delete ID'  />
 	
 	</p>
</form>



";