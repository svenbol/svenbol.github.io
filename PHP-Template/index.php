<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "./class/Page.class.php";
$p = new Page();
//----------------------------------------------------------------------------------------------------------------
$p->addFavicon("./img/favicon.png");
$p->title = "Winkeltje <3";
$p->addCss("./css/style.css");
$p->addJs("./app/app.js");
// Bootstrap in Page.class.php
	//$p->bootstrapMediaQuery =;
	//$p->bootstrapCss =;
	//$p->bootstrapJs =;
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$p->navbar = include_once "./view/nav.php";
$p->content = include_once "./view/$file.php";
//----------------------------------------------------------------------------------------------------------------
$page = include "./template/page.php";
echo $page;
?>					