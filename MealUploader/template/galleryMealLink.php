<?php
return "
<div id='galleryItem' class='col-4 mt-1 d-inline-block mx-auto align-top text-center'>
    <a id='galleryLink' href='?item=$i->id' alt='$i->img' class='text-center '>
        <p id='galleryItemId' width='25px' height='25px' class='text-center'>$i->id</p>
        <p id='galleryItemName' class=''>$i->name</p>
        <img id='galleryItemImg' src='$i->img' class='col-12 d-block mx-auto rounded-circle' />
    </a>
</div>";