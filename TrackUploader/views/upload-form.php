<?php
return "
<form class='uploadForm' method='post' enctype='multipart/form-data' action='index.php?pagina=upload'>
	<input type='text' name='image-name' placeholder='Trackname!' maxlength='24'><br>
	<input type='text' name='artist' placeholder='Artist/Dj' maxlength='28'><br>
 	<input type='text' name='image-data' placeholder='Pick an image!'><br>
 	<input type='text' name='track-link' placeholder='http://YourLinkHere.example'><br>

 	<input type='submit' name='submit' value='Upload'  />
</form>";

//  action='index.php?pagina=upload'
