<?php
return "
<div id='galleryItem' class='w-33 mt-1 d-inline-block mx-auto align-top text-center border-2 border-light'>
    <a id='galleryLink' href='?item=$i->id' alt='$i->img' class='text-center '>
        <p id='galleryItemId' width='25px' height='25px' class='bg-white text-center'>$i->id</p>
        <p id='galleryItemName' class=''>$i->name</p>
        <img id='galleryItemImg' src='$i->img' class='w-60 d-block mx-auto' />
    </a>
</div>";