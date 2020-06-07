<?php
// PAGINA.php 
//return ipv echo
echo"
<!DOCTYPE html>
<html>
<head>
	<title>$pageModel->title</title>
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
	$pageModel->bootstrap
	$pageModel->css
</head>
<body>
	$pageModel->body
	$pageModel->js
</body>
</html>
";
?> 