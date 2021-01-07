<?php
//$src;
//if(isset($img)) $src = $img;
//else $src = './img/unknownimg.png';

return "
<form class='uploadForm' method='post' enctype='multipart/form-data'>
	<div class='leftFloat'>
		<div class='d-block plantForm'>
			<input type='text' name='name' placeholder='Plant Name' maxlength='24'> <br>
			<input type='text' name='family' placeholder='Family' maxlength='24'> <br>
			<input type='text' name='img' placeholder='Link to Image' maxlength='255'> <br>
		</div>
		<br>
		<div class='d-block waterForm'>
			<input type='text' name='humidity' placeholder='Humidity' maxlength='24'> <br>
			<input type='text' name='water' placeholder='Watering Info' maxlength='48'> <br>
			<input type='text' name='waterWinter' placeholder='Winter Water Info' maxlength='24'> <br>
			<input type='text' name='waterSummer' placeholder='Summer Water Info' maxlength='24'> <br>
			<input type='number' name='acidityMin' step='0.5' min='0' max='14' placeholder='-PH' maxlength='3'>
			<input type='number' name='acidityMax' step='0.5' min='0' max='14' placeholder='+PH' maxlength='3'> <br>
		</div>
		<br>
		<div class='d-block tempForm'>
			<input type='text' name='sun' placeholder='Sun | Shadow' maxlength='24'> <br>
			<input type='number' name='tempMin' min='-50' max='50' placeholder='-Temp' maxlength='3'>
			<input type='number' name='tempMax' min='-50' max='50' placeholder='+Temp' maxlength='3'> <br>
		</div>
	</div>
	
	<div class='rightFloat'>
		<div class='d-block nutritionForm'>
		<input type='text' name='nutritionWhat' placeholder='What to feed.' maxlength='15'> <br>
		<select name='nutritionWhen'>
			<option selected='true' disabled='disabled'>When to feed</option>
			<option value='Spring'>Spring</option>
    		<option value='Summer'>Summer</option>
    		<option value='Autumn'>Autumn</option>
    		<option value='Winter'>Winter</option>
    		<hr>
    		<option value='Jan'>January</option>
    		<option value='Feb'>February</option>
    		<option value='Mar'>March</option>
    		<hr>
    		<option value='Apr'>April</option>
    		<option value='May'>May</option>
    		<option value='Jun'>June</option>
    		<hr>
    		<option value='Jul'>July</option>
    		<option value='Aug'>August</option>
    		<option value='Sep'>September</option>
    		<hr>
    		<option value='Oct'>October</option>
    		<option value='Nov'>November</option>
    		<option value='Dec'>December</option>
		</select>																				<br>
		<input type='text' name='nutritionFreq' placeholder='Frequency to feed.' maxlength='48'> <br>
		</div>
		<br>
		<div class='d-block pruneForm'>
		<input type='text' name='pruningWhat' placeholder='What to prune.' maxlength='15'> <br>
		<select name='pruningWhen'>
			<option selected='true' disabled='disabled'>When to prune</option>
			<option value='Spring'>Spring</option>
    		<option value='Summer'>Summer</option>
    		<option value='Autumn'>Autumn</option>
    		<option value='Winter'>Winter</option>
    		<hr>
    		<option value='Jan'>January</option>
    		<option value='Feb'>February</option>
    		<option value='Mar'>March</option>
    		<hr>
    		<option value='Apr'>April</option>
    		<option value='May'>May</option>
    		<option value='Jun'>June</option>
    		<hr>
    		<option value='Jul'>July</option>
    		<option value='Aug'>August</option>
    		<option value='Sep'>September</option>
    		<hr>
    		<option value='Oct'>October</option>
    		<option value='Nov'>November</option>
    		<option value='Dec'>December</option>
		</select>												
		</div>
		<br>
		<div class='d-block repotForm'>
		<input type='text' name='repotFreq' placeholder='Frequency repotting' maxlength='15'> <br>
		<select name='repotWhen'>
			<option selected='true' disabled='disabled'>When to repot</option>
			<option value='Spring'>Spring</option>
    		<option value='Summer'>Summer</option>
    		<option value='Autumn'>Autumn</option>
    		<option value='Winter'>Winter</option>
    		<hr>
    		<option value='Jan'>January</option>
    		<option value='Feb'>February</option>
    		<option value='Mar'>March</option>
    		<hr>
    		<option value='Apr'>April</option>
    		<option value='May'>May</option>
    		<option value='Jun'>June</option>
    		<hr>
    		<option value='Jul'>July</option>
    		<option value='Aug'>August</option>
    		<option value='Sep'>September</option>
    		<hr>
    		<option value='Oct'>October</option>
    		<option value='Nov'>November</option>
    		<option value='Dec'>December</option>
		</select>													
		</div>
		<br>
		<div class='d-block infoForm'>
		<input type='text' name='toxicity' placeholder='Warning Info' maxlength='96'> <br>
		<input type='text' name='extra' placeholder='Extra Info' maxlength='144'> <br>
		</div>
	</div>
	<div class='bottomFloat'>
		<input id='btnUpload' type='submit' name='upload' class='d-block mx-auto my-auto' value='Upload'  />
		<div class='midFloat'>

		</div>
	</div>
</form>
";