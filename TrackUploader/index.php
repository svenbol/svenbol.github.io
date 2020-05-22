<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "classes/Pagina_data.class.php";
$paginaData = new Pagina_Data();
$paginaData->titel = "Track Uploader";
$paginaData->content = include_once "views/navigatie.php";
$userClicked = isset($_GET['pagina']);
if($userClicked)
{
	$fileToLoad = $_GET['pagina'];
}
else
{
	$fileToLoad ='gallerij';
}
$paginaData->content .= include_once "views/$fileToLoad.php";
//Css toevoegen via Methods:
$paginaData->addCss('css/styling.css');
/*$paginaData->addCss('css/navigatie.css');*/
/* $paginaData->content .= */

$pagina = include_once "templates/pagina.php";
echo $pagina;
?>
