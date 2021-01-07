<?php
return "<!DOCTYPE html>
<html>
<head>
	<title>$p->title</title>
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
	$p->bootstrapCss
	$p->css
	$p->favicon

</head>
<body class='bg-dark mx-auto text-white'>
	$p->navbar
	$p->content
	$p->bootstrapJs
</body>
</html>";
?> 