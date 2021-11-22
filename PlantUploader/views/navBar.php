<?php

if(isset($_POST['searchField'])) $file = "search";
//if(isset($_POST['update'])) $file = "detailtItemUpdate";

return "
<nav class='text-light'>
	<div id='center' class='d-block mx-auto'>

		<a href='index.php'>
			<div id='btnMenu' class='navBtn d-inline-block float-left' >
				<!--<img src='./img/SVG/Icon_Gallery.svg'>-->
				<i class='fa fa-image pt-2'></i>
			</div>
		</a>

		<div id='searchForm' class='d-inline-block'>
			<form class='navBtn d-inline-block' method='post' enctype='multipart/form-data' action=''>
				<input id='searchField' class='w-100 text-white' type='text' name='searchField' class='text-light' placeholder='Search...' maxlenght='25'>
			</form>
		</div>

		<a href='index.php?page=upload'>
			<div id='btnAdd' class='navBtn d-inline-block float-right'>
				+
			</div>
		</a>

		<a href='index.php?page=quickView' class='navSideBtn sideOne'>
			<div id='btnQuick' class='navBtn d-inline-block float-right pr-1'>
				<i class='fa fa-calculator'></i>
			</div>
		</a>

		<a href='index.php?page=retreatView' class='navSideBtn sideTwo'>
			<div id='btnCloud' class='navBtn d-inline-block float-right'>
				<i class='fa fa-cloud'></i>	
			</div>
		</a>

		<a href='index.php?page=ideaGallery' class='navSideBtn sideThree'>
			<div id='btnCloud' class='navBtn d-inline-block float-right'>
				<i class='far fa-lightbulb' style='padding-right:5px;'></i>	
			</div>
		</a>

	</div>

</nav>
";

