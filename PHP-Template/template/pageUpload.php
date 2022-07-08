<?php

return createPage();

function createPage(){
	$i = new Item();
	$out = "<div id='upload' class=''>
			<form method='POST' action='#'>";

	foreach($i as $prop => $val){
		if($prop !== 'id'){
			$out .= "<div class='row'>
					<input name='$prop' class='text-center col-md-4 mx-auto' type='text' placeholder='$prop'>
				</div>";
		}
	}
	
	$out .="<div class='row '>
				<input type='submit' class='col-md-4 mx-auto' name='upload'>
			</div>
		</form>
		</div>";
		
	return $out;
}	
?>