<?php
//$src;
//if(isset($img)) $src = $img;
//else $src = './img/unknownimg.png';

return "
<form class='uploadForm' method='post' enctype='multipart/form-data'>
	<div class='leftFloat'>
		<div class='d-block plantForm'>
			<img width='30px' height='30px' class='uploadIcon d-block' src='../img/SVG/Icon_Gallery.svg'>
			<input type='text' name='name' placeholder='Plant Name' maxlength='24'> <br>
			<input type='text' name='family' placeholder='Family' maxlength='24'> <br>
			<input type='text' name='img' placeholder='Link to Image' maxlength='255'> <br>
		</div>
		<div class='d-block waterForm'>
			<img width='30px' height='30px' class='uploadIcon d-block' src='../img/SVG/Icon_Water.svg'>
			<select class='float-left pl-' name='humidity'> 
				<option selected='true' disabled='disabled'>Humidity</option>
				<option disabled='disabled'>------------------------</option>
				<option value='Humid'>Humid (~80)</option>
				<option value='Neutral'>Neutral  (~50)</option>
				<option value='Dry'>Dry (~20)</option>
			</select>																					<br>
			<select name='water'> 
				<option selected='true' disabled='disabled'>Watering Info</option>
				<option disabled='disabled'>------------------------</option>
				<option value='Moisty soil'>Moisty soil</option>
				<option value='Slightly moist soil'>Slightly moist soil</option>
				<option value='Almost dry soil'>Almost dry soil</option>
				<option value='Dry soil'>Dry soil</option>
				<option disabled='disabled'>------------------------</option>
				<option value='Always water in the calyx'>Always water in the calyx</option>
			</select>
			<br>
			<input type='text' name='waterWinter' placeholder='Winter Water Info' maxlength='24'> <br>
			<input type='text' name='waterSummer' placeholder='Summer Water Info' maxlength='24'> <br>
			<input type='number' name='acidityMin' step='0.5' min='0' max='14' placeholder='-PH' maxlength='3'>
			<input type='number' name='acidityMax' step='0.5' min='0' max='14' placeholder='+PH' maxlength='3'> <br>
		</div>
		<div class='d-block tempForm'>
			<img width='30px' height='30px' class='uploadIcon d-block float-left' src='../img/SVG/Icon_Sun.svg'>
			<select name='sun'> 
				<option selected='true' disabled='disabled'>Sun Requirements</option>
				<option disabled='disabled'>------------------------</option>
				<option value='Full Sun'>Full Sun</option>
				<option disabled='disabled'>------------------------</option>
				<option value='Half'>Half</option>
				<option disabled='disabled'>------------------------</option>
				<option value='Full Shadow'>Full Shadow</option>
			</select>																					<br>
			<input type='number' name='tempMin' min='-50' max='50' placeholder='-Temp' maxlength='3'>
			<input type='number' name='tempMax' min='-50' max='50' placeholder='+Temp' maxlength='3'> <br>
		</div>
	</div>
	
	<div class='rightFloat'>
		<div class='d-block nutritionForm'>
		<img width='30px' height='30px' class='uploadIcon d-block' src='../img/SVG/Icon_Nutrition.svg'>
		<input type='text' name='nutritionWhat' placeholder='What to feed' maxlength='15'> <br>
		<select name='nutritionWhen'>
			<option selected='true' disabled='disabled'>When to feed</option>
			<option disabled='disabled'>------------------------</option>
			<option value='Spring'>Spring</option>
    		<option value='Summer'>Summer</option>
    		<option value='Autumn'>Autumn</option>
    		<option value='Winter'>Winter</option>
    		<option disabled='disabled'>------------------------</option>
    		<option value='Jan'>January</option>
    		<option value='Feb'>February</option>
    		<option value='Mar'>March</option>
    		<option value='Apr'>April</option>
    		<option value='May'>May</option>
    		<option value='Jun'>June</option>
    		<option value='Jul'>July</option>
    		<option value='Aug'>August</option>
    		<option value='Sep'>September</option>
    		<option value='Oct'>October</option>
    		<option value='Nov'>November</option>
    		<option value='Dec'>December</option>
		</select>																				<br>
		<input type='text' name='nutritionFreq' placeholder='Frequency to feed' maxlength='24'> <br>
		</div>
		<div class='d-block pruneForm'>
		<img width='30px' height='30px' class='uploadIcon d-block' src='../img/SVG/Icon_Pruning.svg'>
		<input type='text' name='pruningWhat' placeholder='What to prune' maxlength='15'> <br>
		<select name='pruningWhen'>
			<option selected='true' disabled='disabled'>When to prune</option>
			<option disabled='disabled'>------------------------</option>
			<option value='Spring'>Spring</option>
    		<option value='Summer'>Summer</option>
    		<option value='Autumn'>Autumn</option>
    		<option value='Winter'>Winter</option>
    		<option disabled='disabled'>------------------------</option>
    		<option value='Jan'>January</option>
    		<option value='Feb'>February</option>
    		<option value='Mar'>March</option>
    		<option value='Apr'>April</option>
    		<option value='May'>May</option>
    		<option value='Jun'>June</option>
    		<option value='Jul'>July</option>
    		<option value='Aug'>August</option>
    		<option value='Sep'>September</option>
    		<option value='Oct'>October</option>
    		<option value='Nov'>November</option>
    		<option value='Dec'>December</option>
		</select>												
		</div>
		<div class='d-block repotForm'>
		<img width='30px' height='30px' class='uploadIcon d-block' src='../img/SVG/Icon_Potting.svg'>
		<select type='text' name='repotFreq' placeholder='Frequency repotting'> 
			<option selected='true' disabled='disabled'>Frequency repotting</option>
			<option disabled='disabled'>------------------------</option>
			<option value='Every 1 year'>Every 1 year</option>
			<option value='Every 2 years'>Every 2 Years</option>
			<option value='Every 3 years'>Every 3 Years</option>
			<option value='Every 4 years'>Every 4 Years</option>
		</select>																						<br>
		<select name='repotWhen'>
			<option selected='true' disabled='disabled'>When to repot</option>
			<option disabled='disabled'>------------------------</option>
			<option value='Spring'>Spring</option>
    		<option value='Summer'>Summer</option>
    		<option value='Autumn'>Autumn</option>
    		<option value='Winter'>Winter</option>
    		<option disabled='disabled'>------------------------</option>
    		<option value='Jan'>January</option>
    		<option value='Feb'>February</option>
    		<option value='Mar'>March</option>
    		<option value='Apr'>April</option>
    		<option value='May'>May</option>
    		<option value='Jun'>June</option>
    		<option value='Jul'>July</option>
    		<option value='Aug'>August</option>
    		<option value='Sep'>September</option>
    		<option value='Oct'>October</option>
    		<option value='Nov'>November</option>
    		<option value='Dec'>December</option>
		</select>													
		</div>
		<div class='d-block infoForm'>
		<img width='30px' height='30px' class='uploadIcon d-block' src='../img/SVG/Icon_Info.svg'>
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