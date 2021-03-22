<?php
return "<!DOCTYPE html>
<html>
<head>
	<title>$p->title</title>
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
	$p->bootstrapMediaQuery
	$p->bootstrapCss
	$p->css
	$p->favicon
	$p->fonts
</head>
<body class='mx-auto text-light pb-5'>
	$p->navbar
	<div class='main'>
	<div class='container'>
		$p->content
	</div>
	</div>
	$p->bootstrapJs
</body>
</html>";
?> 