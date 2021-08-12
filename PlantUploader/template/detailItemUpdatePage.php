<?php

//$_SESSION['chosenPlant'] = $id;

return "
<div id='detail' class='container'>
	<div class='row'>
		<form method='POST' action='#' enctype='multipart/form-data'>
			<div id='leftDetail' class='col-6'>
				<img id='exampleIMG' class='col-10 mx-auto' src='$i->img'>
    			<h2><input type='text' name='name' class='w-100' style='max-width=360px' value='$i->name' maxlength='28' ></h2>
    			<h4><input type='text' name='family' class='w-100' style='max-width=360px' value='$i->family' maxlength='28' ></h4>
    			<hr>
    			<p><input type='text' name='extra' class='w-100' style='max-width=360px' value='$i->extra' maxlength='62'></p>
    			<p><input type='text' name='img' class='w-100' style='max-width=360px' value='$i->img' maxlength='250'></p>
			</div>

		
			<div id='rightDetail' class='col-6 container'>
			
				<div class='row'>
					<div class='col-1 px-0 py-1 mx-auto temperatureInfo'> 
						<img class='d-block mx-auto' width='30px' src='./img/SVG/Icon_Temperature.svg'>
					</div>
					<div class='col-2 px-0 py-1 temperatureInfo'> <input type='number' value='$i->tempMin' maxlength='3'> </div>
					<div class='col-2 px-0 py-1 temperatureInfo'> <input type='number' value='$i->tempMax' maxlength='3'> </div>
					
					<div class='col-1 px-0 py-1 mx-auto sunInfo'> 
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Sun.svg'> 
					</div>
					<div class='col-6 py-1 sunInfo'> 
						<select name='sun' class='w-100'> 
							<option disabled='disabled'>Sun Requirements</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Full Sun'>Full Sun</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Half'>Half</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Full Shadow'>Full Shadow</option>
							<option selected='true' value='$i->sun'> $i->sun </option>
						</select>	
					</div>
				</div>
	
				<br>
	
				<div class='row'>
					<div class='col-1 px-0 py-1 mx-auto acidityInfo'>
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Acidity.svg'>
					</div>
					<div class='col-2 px-0 py-1 acidityInfo'> <input type='number' value='$i->acidityMin' maxlength='3'> </div>
					<div class='col-2 px-0 py-1 acidityInfo'> <input type='number' value='$i->acidityMax' maxlength='3'> </div>
	
					<div class='col-1 px-0 py-1 mx-auto humidityInfo'> 
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Humidity.svg'> 	
					</div>
					<div class='col-6 py-1 humidityInfo'> 
						<select class='float-left w-100' name='humidity'> 
							<option  disabled='disabled'>Humidity</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Humid'>Humid (~80)</option>
							<option value='Neutral'>Neutral  (~50)</option>
							<option value='Dry'>Dry (~20)</option>
							<option selected='true' value='$i->humidity'> $i->humidity </option>
						</select>	 
					</div>
				</div>
	
				<br>
	
				<div class='row waterInfo'>
					<div class='col-1 px-0 py-1'></div>
					<div class='col-11'> 
						<select name='water' class='w-100' style='max-width:360px'> 
							<option disabled='disabled'>Watering Info</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Moisty soil'>Moisty soil</option>
							<option value='Slightly moist soil'>Slightly moist soil</option>
							<option value='Almost dry soil'>Almost dry soil</option>
							<option value='Dry soil'>Dry soil</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Dry soil for half a week'>Dry soil for half a week</option>
							<option value='Dry soil for a week'>Dry soil for a week</option>
							<option value='Dry soil for 2 weeks'>Dry soil for 2 weeks</option>
							<option value='Dry soil for a month'>Dry soil for a month</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Always water in the calyx'>Always water in the calyx</option>
							<option selected='true' value='$i->water'> $i->water </option>
						</select> 
					</div>
				</div>
				<div class='row waterInfo'>
					<div class='col-1 px-0 py-1'>
						<img class='d-block mx-auto' width='30px' src='./img/SVG/Icon_Water.svg'>
					</div>
					<div class='col-11'> <input name='waterWinter' type='text' class='w-100' style='max-width:360px' value='$i->waterWinter' maxlength='24'> </div>
				</div>
				<div class='row waterInfo'>
					<div class='col-1 px-0 py-1'></div>
					<div class='col-11'> <input name='waterSummer' type='text' class='w-100' style='max-width:360px' value='$i->waterSummer' maxlength='24'> </div>
				</div>
		
				<br>
	
				<div class='row nutritionInfo'>
					<div class='col-1 px-0 py-1'>
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Nutrition.svg'>
					</div>
					<div class='col-5'> <input class='w-100' name='nutritionWhat' type='text' value='$i->nutritionWhat'> </div>
					<div class='col-6'> <input class='w-100' name='nutritionFreq' type='text'  value='$i->nutritionFreq' maxlength='15'> </div>
				</div>
				<div class='row nutritionInfo'>
					<div class='col-1 px-0 py-1'>
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Pruning.svg'>
					</div>
					<div class='col-5'> <input name='pruningWhat' class='w-100' type='text' maxlength='15' value='$i->pruningWhat'> </div>
					<div class='col-1 px-0 py-1 border-left border-succes'>
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Potting.svg'>
					</div>
					<div class='col-5'> 
						<select type='text' class='w-100 py-1' name='repotFreq' placeholder='Frequency repotting'> 
							<option disabled='disabled'>Frequency repotting</option>
							<option disabled='disabled'>------------------------</option>
							<option value='Every 1 year'>Every 1 year</option>
							<option value='Every 2 years'>Every 2 Years</option>
							<option value='Every 3 years'>Every 3 Years</option>
							<option value='Every 4 years'>Every 4 Years</option>
							<option selected='true' value='$i->repotFreq'> $i->repotFreq </option>
						</select> 
					</div>
				</div>
				<div class='row nutritionInfo'>
					<div class='mx-auto col-1 px-0 py-1'>
						<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Warning.svg'>
					</div>
					<div class='col-11'> <input type='text' name='toxicity' class='w-100' style='max-width:360px' value='$i->toxicity' maxlength='96'> </div>
				</div>
	
				<br>
	
				<div class='row changeInfo border-0' style='direction:rtl'>
					<input id='btnUpdate' type='submit' name='update' class='col-6 d-inline-block mx-auto my-auto' value='Update'>
					<input id='btnDelete' type='submit' name='delete' class='col-6 d-inline-block mx-auto my-auto' value='Delete'>
				</div>
				
			</div>
		</form>
	</div>
</div>
";
