<?php

//$_SESSION['chosenPlant'] = $id;

$nutriMonths="";
$repotMonths;
$pruneMonths;

$nutriImgSrc = "../img/SVG/Icon_Nutrition.svg";
$repotImgSrc = "../img/SVG/Icon_Potting.svg";
$pruneImgSrc = "../img/SVG/Icon_Pruning.svg";



switch($nutritionWhen){
	case "January":
	 	$nutriMonths = " 
	 		<div class='col-1 winter bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";    		
        break;
    case "February":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "March":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring bg-nutri'><img src='$nutriImgSrc'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "April":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "May":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "June":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer bg-nutri'><img src='$nutriImgSrc'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "July":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "August":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "September":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "October":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
        break;
    case "November":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 winter'></div>";
        break;
    case "December":
        $nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter bg-nutri'><img src='$nutriImgSrc'></div>";
        break;
    case "Spring":
    	$nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring bg-nutri'></div> 
            <div class='col-1 spring bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 spring bg-nutri'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
    	break;
    case "Summer":
    	$nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer bg-nutri'></div>	
            <div class='col-1 summer bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 summer bg-nutri'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
    	break;
    case "Autumn":
    	$nutriMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn bg-nutri'></div>
            <div class='col-1 autumn bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 autumn bg-nutri'></div>
            <div class='col-1 winter'></div>";
    	break;
    case "Winter":
    	$nutriMonths = " 
	 		<div class='col-1 winter bg-nutri'><img src='$nutriImgSrc'></div>
            <div class='col-1 winter bg-nutri'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter bg-nutri'></div>";
    	break;
    default:
    	$nutriMonths = "";
}

switch($repotWhen){
	 case "January":
	 	$repotMonths = " 
	 		<div class='col-1 winter bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>"; 
           break;
     case "February":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "March":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring bg-repot'><img src='$repotImgSrc'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "April":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "May":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
            break;
     case "June":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer bg-repot'><img src='$repotImgSrc'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "July":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "August":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "September":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "October":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "November":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 winter'></div>";
           break;
     case "December":
	 	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter bg-repot'><img src='$repotImgSrc'></div>";
           break;
     case "Spring":
    	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring bg-repot'></div> 
            <div class='col-1 spring bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 spring bg-repot'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
    	break;
     case "Summer":
    	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer bg-repot'></div>	
            <div class='col-1 summer bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 summer bg-repot'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
    	break;
     case "Autumn":
    	$repotMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn bg-repot'></div>
            <div class='col-1 autumn bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 autumn bg-repot'></div>
            <div class='col-1 winter'></div>";
    	break;
     case "Winter":
    	$repotMonths = " 
	 		<div class='col-1 winter bg-repot'><img src='$repotImgSrc'></div>
            <div class='col-1 winter bg-repot'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter bg-repot'></div>";
    	break;	
    default:
    	$repotMonths = "";
}

switch( $pruningWhen ){
     case "January":
        $pruneMonths = " 
            <div class='col-1 winter bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>"; 
           break;
     case "February":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "March":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring bg-prune'><img src='$pruneImgSrc'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "April":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "May":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
            break;
     case "June":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer bg-prune'><img src='$pruneImgSrc'></div>   
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "July":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "August":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "September":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "October":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
           break;
     case "November":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 winter'></div>";
           break;
     case "December":
        $pruneMonths = " 
            <div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>    
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter bg-prune'><img src='$pruneImgSrc'></div>";
           break;
               case "Spring":
    	$pruneMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring bg-prune'></div> 
            <div class='col-1 spring bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 spring bg-prune'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
    	break;
     case "Summer":
    	$pruneMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer bg-prune'></div>	
            <div class='col-1 summer bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 summer bg-prune'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter'></div>";
    	break;
     case "Autumn":
    	$pruneMonths = " 
	 		<div class='col-1 winter'></div>
            <div class='col-1 winter'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn bg-prune'></div>
            <div class='col-1 autumn bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 autumn bg-prune'></div>
            <div class='col-1 winter'></div>";
    	break;
     case "Winter":
    	$pruneMonths = " 
	 		<div class='col-1 winter bg-prune'><img src='$pruneImgSrc'></div>
            <div class='col-1 winter bg-prune'></div>
            <div class='col-1 spring'></div> 
            <div class='col-1 spring'></div>
            <div class='col-1 spring'></div>
            <div class='col-1 summer'></div>	
            <div class='col-1 summer'></div>
            <div class='col-1 summer'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 autumn'></div>
            <div class='col-1 winter bg-prune'></div>";
    	break;
    default:
    	$pruneMonths = "";
}

return "
<div id='detail' class='container'>
	<div class='row'>
		<div id='leftDetail' class='col-6 text-center'>
			<img id='exampleIMG' class='col-10 mx-auto' src='$img'>
    		<h2 class='mt-2'>$name</h2>
    		<h4>$family</h4>
    		<hr width='300px'>
    		<p>$extra</p>
		</div>

		<div id='rightDetail' class='col-6 text-center container'>

			<div class='row'>
				<div class='col-1 px-0 py-1 mx-auto temperatureInfo'> 
					<img class='d-block mx-auto' width='30px' src='./img/SVG/Icon_Temperature.svg'>
				</div>
				<div class='col-1 px-0 py-1 temperatureInfo'> $tempMin </div>
				<div class='col-1 px-0 py-1 temperatureInfo'> $tempMax </div>
				
				<div class='col-1 px-0 py-1 mx-auto sunInfo'> 
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Sun.svg'> 
				</div>
				<div class='col-8 py-1 sunInfo'> $sun </div>
			</div>

			<br>

			<div class='row'>
				<div class='col-1 px-0 py-1 mx-auto acidityInfo'>
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Acidity.svg'>
				</div>
				<div class='col-1 px-0 py-1 acidityInfo'> $acidityMin</div>
				<div class='col-1 px-0 py-1 acidityInfo'> $acidityMax</div>

				<div class='col-1 px-0 py-1 mx-auto humidityInfo'> 
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Humidity.svg'> 	
				</div>
				<div class='col-8 py-1 humidityInfo'> $humidity </div>
			</div>

			<br>

			<div class='row waterInfo'>
				<div class='col-1 px-0 py-1'></div>
				<div class='col-11'> $water </div>
			</div>
			<div class='row waterInfo'>
				<div class='col-1 px-0 py-1'>
					<img class='d-block mx-auto' width='30px' src='./img/SVG/Icon_Water.svg'>
				</div>
				<div class='col-11'> $waterWinter </div>
			</div>
			<div class='row waterInfo'>
				<div class='col-1 px-0 py-1'></div>
				<div class='col-11'> $waterSummer </div>
			</div>
			
			<br>

			<div class='row nutritionInfo'>
				<div class='col-1 px-0 py-1'>
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Nutrition.svg'>
				</div>
				<div class='col-5'> $nutritionWhat </div>
				<div class='col-6'> $nutritionFreq </div>
			</div>
			<div class='row'>
				<div class='col-1 px-0 py-1 pruningInfo'>
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Pruning.svg'>
				</div>
				<div class='col-5 pruningInfo'> $pruningWhat </div>
				<div class='col-1 px-0 py-1 border-left border-succes repotInfo'>
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Potting.svg'>
				</div>
				<div class='col-5 repotInfo'> $repotFreq </div>
			</div>
			<div class='row toxicityInfo'>
				<div class='mx-auto col-1 px-0 py-1'>
					<img class='d-block mx-auto' width='30px' src='../img/SVG/Icon_Warning.svg'>
				</div>
				<div class='col-11'> $toxicity </div>
			</div>

			<br>

			<div class='row changeInfo'>
				<div class='col-12 mainColor border-top-0 py-1'>
					<a class='' href='index.php?page=detailItemUpdate'>
						<img class='d-block mx-auto' width='40px' src='../img/SVG/Icon_Settings.svg'>
					</a>
				</div>
			</div>
			
		</div>
	</div>
	<div class='row'>
		<div id='bottomDetail' class='container'>
		<div class='timelineIcons timelinePrune row'>
            $pruneMonths
        </div>
		<div class='timelineIcons timelineRepot row'>
            $repotMonths
        </div>
		<div class='timelineIcons timelineNutri row'>
            $nutriMonths
        </div>
    	<div class='timeline row'>
  			<div class='col-1 month'>
  			 jan
  			</div>
  			<div class='col-1 month'>
  			 feb
  			</div>
  			<div class='col-1 month'>
  			 mar
  			</div>
  			<div class='col-1 month'>
  			 apr
  			</div>
  			<div class='col-1 month'>
  			 May
  			</div> 
  			<div class='col-1 month'>
  			 jun
  			</div>
  			<div class='col-1 month'>
  			 jul
  			</div>
  			<div class='col-1 month'>
  			 aug
  			</div>
  			<div class='col-1 month'>
  			 sep
  			</div>
  			<div class='col-1 month'>
  			 oct
  			</div>
  			<div class='col-1 month'>
  			 nov
  			</div>
  			<div class='col-1 month'>
  			 dec
  			</div>
		</div>
		</div>
	</div>
</div>
";


