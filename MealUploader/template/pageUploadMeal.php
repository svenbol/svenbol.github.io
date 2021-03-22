<?php

return createPage();

function createPage(){
	$i = new Meal();
	$out = "<div id='upload' class=''>
			<form method='POST' action='#'>";

	foreach($i as $prop => $val){
		if($prop !== 'id'){
			if($prop == 'description' || $prop == 'ingredients' || $prop == 'kitchenMats'){
				$out .= "<div class='row'>
					<span class='col-md-2 text-right mx-auto'> $prop </span>
					<textarea name='$prop' class='text-center col-md-4 mx-auto ' type='text' placeholder='$prop'></textarea>
				</div>";
			}else{
				$out .= "<div class='row'>
					<span class='col-md-2 text-right mx-auto'> $prop </span>
					<input name='$prop' class='text-center col-md-4 mx-auto ' type='text' placeholder='$prop'>
				</div>";
			}

		}
	}
	
	$out .="<div class='row '>
				<span class='col-md-2 text-right mx-auto'> </span>
				<input type='submit' class='col-md-4 mx-auto' name='upload'>
			</div>
		</form>
		</div>";

	// TIPS
	$out .= "
		<br>
		<i>	<p>Separate multiple items with a comma. [ , ]</p>
			<p> - ingredients: 500gr beef , 2el sugar , 1 tomato , ... </p>
			<p> - kitchenMats: knife, pan, kitchen , ... </p>
			<p> - description: Cut vegetables , Bake onion , Throw in the vegetables , ... </p>
		</i>
	";
		
	return $out;
}	
?>