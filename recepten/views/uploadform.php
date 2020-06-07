<?php
return "
<h1 class='pl-4'>Voeg Voedsel Toe</h1>
<div class='pl-5'>
	<form method='post' action='?page=upload'enctype='multipart/form-data' class='pt-3 center' id='uploadform'>
		<div class='col-4'>
		
			<input type='text' name='name' placeholder='Alg voeding naam' maxlength='20'><p></p>
			<select name='category' form='uploadform' required>
	 		<option selected disabled value> Kies Categorie </option>
	 		<option value='koolhydrathen'>Koolhydrathen</option>
	 		<option value='groenten'>Groenten</option>
	 		<option value='fruit'>Fruit</option>
	 		<option value='vlees'>Vlees</option>
	 		<option value='zuivel'>Zuivel</option>
	 		<option value='drank'>Drank</option>
	 		<option value='beleg'>Beleg</option>
	 		
	 		<option value='snoep'>Snoep</option>
	 		<option value='alcohol'>Alcohol</option>
	 		<option value='frisdrank'>Frisdrank</option>

	 		<option value='vergif'>Vergif</option>
	 		</select><p></p>
	 		<select name='store' form='uploadform' required>
	 		<option selected disabled value> Kies Winkel </option>
	 		<option value='albert'>Albert Heijn</option>
	 		<option value='delhaize'>Delhaize</option>
	 		<option value='colruyt'>Colruyt</option>
	 		<option value='carrefour'>Carrefour</option>
	 		<option value='action'>Action</option>
	 		<option value='aldi'>Aldi</option>
	 		<option value='kipke'>t Kipke</option>
	 		</select><p></p>

	 		<input type='text' name='carbs' placeholder='Koolhydrathen' maxlength='6'><p></p>
	 		<input type='text' name='sugars' placeholder='Suikers' maxlength='5'><p></p>
 			<input type='text' name='fats' placeholder='Vetten' maxlength='5'><p></p>
 	
	 		<input type='text' name='price' placeholder='Prijs' maxlength='7'><p></p>
	 		<input type='text' name='gram' placeholder='Gewicht in gram' maxlength='5'><p></p>
	 		<input type='text' name='photo' placeholder='http://fotolink.jpg' maxlength='150'><p></p>
	 		<input type='text' name='tags' placeholder='tags: chocolade koek ...' maxlenght='65'><p></p>

	 		<input type='submit' name='submitUpload' value='Upload'  />
		
 		</div>
	</form>
</div>";