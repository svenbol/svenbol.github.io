<?php
return "
<h1 class='pl-4'>Voeg Recept Toe</h1>
<div class='pl-5'>
	<form method='post' action='?page=uploadRecepten'enctype='multipart/form-data' class='pt-3 center' id='uploadform'>
		<div class='col-4'>
			<input type='text' name='name' placeholder='Receptnaam'> <p></p>
	 		<input type='text' name='photo' placeholder='foto link'><input type='file' name='photoz'> <p></p>
	 		<input type='text' name='description' placeholder='beschrijving'><p></p>
 			<input type='text' name='kitchmat' placeholder='Nodige keukengerei'><p></p>
 
	 		<input type='text' name='pretime' placeholder='Voorbereiding: minuten'><p></p>
	 		<input type='text' name='dotime' placeholder='wacht/bereiding: minuten' ><p></p>
	 		<input type='text' name='ingredients' placeholder='ingredienten'><p></p>
	 		<input type='text' name='gram' placeholder='gewicht: gram'><p></p>
	 		
	 		<select name='health' form='uploadform' required>
    	 		<option selected disabled value> Gezondheid </option>
	 		    <option value='gezond'>Gezond</option>
	 		    <option value='ongezond'>ongezond</option>
	 		</select>
	 		
	 		<select name='season' form='uploadform' required>
    	 		<option selected disabled value> Seizoen </option>
	 		    <option value='exotisch'>Exotisch</option>
	 		    <option value='winters'>Winter's</option>
	 		</select>
	 		
	 		<select name='type' form='uploadform' required>
    	 		<option selected disabled value> Type </option>
	 		    <option value='voorgerecht'>Voorgerecht</option>
	 		    <option value='nagerecht'>Nagerecht</option>
	 		</select>

	 		<input type='submit' name='submitUploadRecepten' value='Upload'  />
 		</div>
	</form>
</div>";