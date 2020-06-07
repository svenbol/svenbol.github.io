<?php

// INDEX.php

//error_reporting(E_ALL);
error_reporting(0);
ini_set("display_errors",0);

include_once "PageModel.class.php";
$pageModel = new PageModel();
$pageModel->titel = "Track Uploader";
$pageModel->body = include_once "views/nav.php";

$pageModel->css = '<link rel="stylesheet" type="text/css" href="css.css">';
$pageModel->css .='<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">';

$pageModel->bootstrap = '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">';

$pageModel->js = '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="app.js"></script>'
;

// NAVIGATION     
//include 'views/search.php';

$userClicked = isset($_GET['page']);

	if($userClicked)	$page = $_GET['page'];
	else				$page ='home';

	$pageModel->body .= include_once "views/$page.php";
    $pageModel->body .= include_once "pageView.php";
    
?>