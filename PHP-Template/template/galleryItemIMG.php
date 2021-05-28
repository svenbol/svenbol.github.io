<?php
return "
<div id='galleryItem' class='d-inline-block col-xs-10 w-33 mx-auto align-top text-center'>
    <a id='galleryLink' href='index.php?item=$i->id' alt='$i->img' class='text-center '>
        <p id='galleryItemId' width='25px' height='25px' class='bg-black text-center text-light'>$i->id</p>
        <p id='galleryItemName' class=''>$i->name</p>
        <img id='galleryItemImg' src='img/$i->$img' class='w-90 d-block mx-auto' />
    </a>
</div>";