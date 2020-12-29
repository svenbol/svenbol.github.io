<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "./classes/Pagina_data.class.php";
$paginaData = new Pagina_Data();
$paginaData->titel = "Track Uploader";
$paginaData->content = include "./views/navigatie.php";

$userClicked = isset($_GET['pagina']);
if($userClicked) $fileToLoad = $_GET['pagina'];
else $fileToLoad ='gallerij';

$paginaData->content .= include_once "./views/$fileToLoad.php";
$paginaData->addCss('./css/styling.css');

$pagina = include_once "./templates/pagina.php";
echo $pagina;
?>
