<?php
return "
<!DOCTYPE html>
<html>
<head>
	<title>$paginaData->titel</title>
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
	$paginaData->favicon
	$paginaData->bootstrapCss
	$paginaData->css
</head>
<body>
	<div class='bgcolor'>
		$paginaData->content
	</div>
	$paginaData->bottomScripts
</body>
</html>";
?> 