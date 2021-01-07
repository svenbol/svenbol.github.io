<?php
return "
<div id='detail'>
	<div id='leftDetail'>
    	<img id='exampleIMG' src='$img'>
    	<h2>$name</h2>
    	<h4>$family</h4>
    	<hr>
    	<p>$extra</p>
	</div>

	<div id='rightDetail'>
    	<table>
    	  <tr>
    	  <div class='infoLeft'>
    	    <td class='iconSpot temperatureInfo'>
    	      <img class='d-block mx-auto' width='20px' src='./img/SVG/Icon_Temperature.svg'></td>    
    	    <td class='resSmallNr temperatureInfo'>$tempMin</td>
    	    <td class='resSmallNr temperatureInfo'>$tempMax</td>
    	   </div>
    	   <div class='infoRight'>
    	    <td class='iconSpot sunInfo'>
    	    <img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Sun.svg'></td>
    	    <td class='sunInfo resQuart'>$sun</td>
    	   </div>
    	  </tr>
    	</table>
    	<br>
    	<table>
    	  <tr>
    	  <td class='iconSpot acidityInfo'>
    	    <img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Acidity.svg'>
    	  </td>
    	  <td class='resSmallNr acidityInfo'>$acidityMin</td>
    	  <td class='resSmallNr acidityInfo'>$acidityMax</td>
    	  <td class='iconSpot humidityInfo'>
    	    <img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Humidity.svg'>
    	  </td>
    	  <td class='humidityInfo resQuart'>$humidity</td>
    	</table>
    	<br>
    	<table class='waterInfo'>
    	  <tr><td class='iconSpot'></td><td class='res'>$water</td></tr>
    	  <tr>
    	  	<td><img class='d-block mx-auto' width='20px' src='./img/SVG/Icon_Water.svg'></td>
    	    <td>$waterWinter</td>
    	  </tr>
    	  <tr><td></td><td>$waterSummer</td></tr>
    	</table>
    	<br>
    	<table class='nutritionInfo'>
    	  <tr>
    	    <td class='iconSpot'> <img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Nutrition.svg'> </td>
    	    <td class='resHalf'>$nutritionWhat</td><td class='resHalf'>$nutritionFreq</td>
    	   </tr>
    	</table>
    	<table class='nutritionInfo'>
    	  <tr>
    	    <td class='iconSpot'> <img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Pruning.svg'> </td>
    	    <td class='resSmallz'> $pruningWhat </td>
    	    <td class='iconSpot'> <img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Potting.svg'> </td>
    	    <td class='resSmallz'> $repotFreq </td>
    	  </tr>
    	</table>
    	<table class='nutritionInfo'>
    	  <tr>
    	    <td class='iconSpot'><img class='d-block mx-auto' width='20px' src='../img/SVG/Icon_Warning.svg'></td>
    	    <td class='res'> $toxicity </td>
    	  </tr>
    	</table>
	</div>

	<div id='bottomDetail'>
    	<div class='timeline'>
  			<div class='firstMonth winter'>
  			jan
  			</div>
  			<div class='month winter'>
  			feb
  			</div>
  			<div class='month winter'>
  			mar
  			</div>
  			<div class='month spring'>
  			apr
  			</div>
  			 <div class='month spring'>
  			may
  			</div> 
  			<div class='month spring'>
  			jun
  			</div>
  			 <div class='month summer'>
  			jul
  			</div>
  			 <div class='month summer'>
  			aug
  			</div>
  			 <div class='month summer'>
  			sep
  			</div>
  			 <div class='month autumn'>
  			oct
  			</div>
  			 <div class='month autumn'>
  			nov
  			</div>
  			 <div class='lastMonth autumn'>
  			dec
  			</div>
		</div>
	</div>
</div>
";