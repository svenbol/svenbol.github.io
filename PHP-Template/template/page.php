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

</head>
<body class='bg-dark mx-auto text-light pb-5'>
	$p->navbar
	<div class='main mt-5'>
		$p->content
	</div>
	$p->bootstrapJs
</body>
</html>";
?> 