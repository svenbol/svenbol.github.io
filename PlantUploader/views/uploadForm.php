<?php
return "
<form class='uploadForm' method='post' enctype='multipart/form-data'>
	<input type='text' name='name' placeholder='Plant Name' maxlength='24'>
	<input type='text' name='family' placeholder='Family' maxlength='24'>
	<input type='text' name='img' placeholder='Link to Image' maxlength='24'>
	<input type='text' name='humidity' placeholder='Humidity' maxlength='24'>
	<input type='text' name='water' placeholder='Watering Info' maxlength='48'>
	<input type='text' name='waterWinter' placeholder='Winter Water Info' maxlength='24'>
	<input type='text' name='waterSummer' placeholder='Summer Water Info' maxlength='24'>
	<input type='number' name='acidityMin' step='0.1' min='0' max='14' placeholder='Min PH value' maxlength='3'>
	<input type='number' name='acidityMax' step='0.1' min='0' max='14' placeholder='Max PH value' maxlength='3'>
	<input type='text' name='sun' placeholder='Sun | Shadow' maxlength='24'>
	<input type='number' name='tempMin' min='-50' max='50' placeholder='Min Temperature' maxlength='3'>
	<input type='number' name='tempMax' min='-50' max='50' placeholder='Max Temperature' maxlength='3'>
	<input type='text' name='nutrition' placeholder='Nutrition' maxlength='48'>
	<input type='text' name='pruning' placeholder='Pruning' maxlength='48'>
	<input type='text' name='repotting' placeholder='Repotting' maxlength='48'>
	<input type='text' name='toxicity' placeholder='Warning Info' maxlength='24'>
	<input type='text' name='extra' placeholder='Extra Info' maxlength='48'>

 	<input type='submit' name='upload' value='Upload'  />
</form>";