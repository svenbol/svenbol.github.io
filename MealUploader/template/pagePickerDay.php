<?php

$out = "";

$ingredients = explode(",",$i->ingredients);
$materials = explode(",",$i->kitchenMats);
$description = explode(",",$i->description);


$out .= "
	<div id='pickerDay' class='container'>
		<div class='row mt-3 px-2 py-1'>
			<div class='w-30 text-dark roundedz'>
				<div class='w-100 '>
					<h5> Ingrediënts </h5>
					<ul>";

foreach($ingredients as $val) $out .= "<li> $val </li>";

$out .= "
					</ul>
						</div>
						<div class='w-100'>
							<h5 class='borderTop'> Materials </h5>
							<ul>";

foreach($materials as $val) $out .= "<li> $val </li>";

$out .= "					</ul>
						</div>
					</div>
					<div class='pickerDayImgWrap w-70 mx-auto text-dark roundedz'>
						<h5 class='text-center'> $i->name </h5>
						<img class='w-50 d-block mx-auto pt-0 bg-light pickerDayImg' height='150px' src='$i->img'>
						<span class='w-50 d-block text-center mx-auto'> $i->time mins </span>
						<ol class='m-3'>";

foreach($description as $val) $out .= "<li> $val </li>";

$out .= "				</ol>
					</div>
				</div>
			</div>";

return $out;
/*
return "
	<div id='pickerDay' class='container'>
		<div class='row'>
			<div class='col-2'></div>
			<div class='col-8 text-center pt-3'>
				<h1 class='w-100 text-center '> $i->name </h3>
			</div>
			<div class='col-2'></div>
		</div>

		<div class='row mt-3 px-2 py-1'>
			<div class='w-30 text-dark roundedz'>
				<div class='w-100 '>
					<h5> Ingrediënts </h5>
					<ul>
						<li>foreach</li>
						<li>ingredient</li>
						<li>name - weight</li>
						<li>- sugar - 50gr</li>
						<li>- wheat - 50gr</li>
					</ul>
				</div>
				<div class='w-100'>
					<h5 class='borderTop'> Materials </h5>
					<ul>
						<li>foreach</li>
						<li>kitchenMat</li>
						<li>name</li>
						<li>- blender</li>
						<li>- oven</li>
					</ul>
				</div>
			</div>
			<div class='pickerDayImgWrap w-70 mx-auto text-dark roundedz'>
				<h5> Recept </h5>
				<img class='w-50 d-block mx-auto pt-0 bg-light' height='150px' src='$img'>
				<span class='w-50 d-block text-center mx-auto'> 50 mins</span>
				<ol class='m-3'>
					<li>Gooi alle natte ingredienten bij elkaar</li>
					<li>Gooi alle droge ingredienten bij elkaar</li>
					<li>Meng nu langzaam de natte met de droge ingredienten</li>
					<li>Dauw dit een uurtje in de oven op 180°C </li>
					<li>Ready</li>
				</ol>
			</div>
		</div>
	</div>
	
";
*/