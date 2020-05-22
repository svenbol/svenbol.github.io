<?php
return "
<hr class='hrTitel'>
<div class='hoofdtitel' ><h1><span>Upload a track!</span></h1><hr class='hrTitel'></div>
<form class='uploadForm' method='post' enctype='multipart/form-data' action='index.php?pagina=upload'>
	<input type='text' name='image-name' placeholder='Trackname!' maxlength='28'><br>
	<input type='text' name='artist' placeholder='Artist/Dj' maxlength='28'><br>
 	<input type='text' name='image-data' placeholder='Pick an image!'><br>
 	<input type='text' name='track-link' placeholder='http://YourLinkHere.example'><br>

 	<input type='submit' name='submit' value='Upload'  />
</form>";

//  action='index.php?pagina=upload'

/*  OFFICIAL CODE ---------------------------------------------------------------------
<hr class='hrTitel'>
<div class='hoofdtitel' ><h1><span>Upload a track!</span></h1><hr class='hrTitel'></div>
<form class='uploadForm' method='post' enctype='multipart/form-data' action='index.php?pagina=upload'>
	<input type='text' name='image-name' placeholder='Trackname!' maxlength='28'>
	<input type='text' name='artist' placeholder='Artist/Dj' maxlength='28'><br>
 	<input type='file' name='image-data' accept='image/*' placeholder='Pick an image!'><br>
 	<input type='text' name='track-link' placeholder='http://YourLinkHere.example'><br>

 	<input type='submit' name='submit' value='Upload'  />
</form>";
*/