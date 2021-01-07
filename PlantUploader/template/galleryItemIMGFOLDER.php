<?php
return "
<div id='item' class='d-inline-block col-xs-10 col-md-4 mx-auto px-2 align-top font-weight-bold text-center'>
    <a href='#' alt='$img' class='text-center '>
        <img src='img/$img' class='w-90 d-block mx-auto' />
        <span id='plantId' class='bg-white rounded-circle position-absolute'>$id</span>
    	<p id='itemName' class='pt-3 text-light'>$name</p>
    </a>
</div>";