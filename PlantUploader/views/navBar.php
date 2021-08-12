<?php


if(isset($_POST['searchField'])) $file = "search";
//if(isset($_POST['update'])) $file = "detailtItemUpdate";

return "
<nav class='text-light'>
	<div id='center' class='d-block mx-auto'>

		<a href='index.php?page=quickView'>
		<div id='btnMenu' class='navBtn d-inline-block float-left' >
			<img src='./img/SVG/Icon_Gallery.svg'>
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

	</div>
</nav>
";

