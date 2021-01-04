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
<body class='w-100 p-3 container-sm-10 container-xl-5'>
	$p->content
	$p->bootstrapJs
</body>
</html>";
?> 