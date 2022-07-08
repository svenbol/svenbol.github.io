<?php
return "
<div id='galleryItem' class='d-inline-block w-33 mx-auto align-top text-center'>
    <a id='galleryLink' href='index.php?item=$i->id' alt='$i->img' class='text-center '>
        <p id='galleryItemId' width='25px' height='25px' class='bg-white text-center'>$i->id</p>
        <p id='galleryItemName' class=''>$i->name</p>
        <img id='galleryItemImg' src='img/$i->$img' class='col-12 d-block mx-auto rounded-circle' />
    </a>
</div>";