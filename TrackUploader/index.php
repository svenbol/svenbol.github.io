<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "./classes/Pagina_data.class.php";
$paginaData = new Pagina_Data();
$paginaData->titel = "Track Uploader";
<<<<<<< HEAD
//$paginaData->favicon = include_once "./app/favicon.php";
$paginaData->content = include_once "./views/navigatie.php";
=======
$paginaData->content = include "./views/navigatie.php";
>>>>>>> parent of a546d79... rollback (?)

$userClicked = isset($_GET['pagina']);
if($userClicked) $fileToLoad = $_GET['pagina'];
else $fileToLoad ='gallerij';

$paginaData->content .= include_once "./views/$fileToLoad.php";
$paginaData->addCss('./css/styling.css');

<<<<<<< HEAD
//$paginaData->bootstrap = include_once "./app/bootstrapCSS.php";
$paginaData->addCss("./css/styling.css");
//$paginaData->bottomScripts = include_once "./app/bootstrapPlugin.php";

$pagina = include './templates/pagina.php';
=======
$pagina = include_once "./templates/pagina.php";
>>>>>>> parent of a546d79... rollback (?)
echo $pagina;
?>
