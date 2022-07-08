<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "./class/Page.class.php";
//-------------------------------------------------------------------------------------
$p = new Page();

$p->addFavicon("./img/favicon.png");
$p->title = "Plant Uploader";
$p->addCss("./css/style.css");
//$p->addJs("./app/app.php");
$p->bootstrapCss = "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>";
$p->bootstrapJs ="	
	<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
	<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js' integrity='sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s' crossorigin='anonymous'></script>";
$p->fontAwesomeJS = "<script src='https://kit.fontawesome.com/b8f42b4318.js' crossorigin='anonymous'></script>";
//$p->fontAwesomeJS ="<script src='https://use.fontawesome.com/4dc3e19a0b.js'></script>";
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$chosenPage = isset($_GET['page']);
if($chosenPage) $file = $_GET['page'];
else $file = 'gallery';


$chosenPlant = isset($_GET['plant']);
if($chosenPlant) {
	$_SESSION['chosenPlant'] = $_GET['plant'];
	$file = 'detail';
}

$p->navbar = include_once "./views/navBar.php";
$p->content = include_once "./views/$file.php";
//----------------------------------------------------------------------------------------------------------------
//$page = 
$page = include "./template/page.php";
echo $page;
?>					