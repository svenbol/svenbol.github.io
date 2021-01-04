<?php

$fileToLoad;
$subtitel;
if(isset($_GET['pagina']))  $fileToLoad = $_GET['pagina'];
else $fileToLoad = 'gallerij';

switch($fileToLoad){
    case 'gallerij':
        $titel = 'Gallery of Tracks';
        $subtitel = '';
        break;
    case 'delete':
        $titel = 'Moderate by track id';
        $subtitel = 'Track id can be found in the lower left corner of the picture.';
        break;
    case 'upload':
        $titel = 'Upload a track!';
        $subtitel = '';
        break;
    case 'index':
        $titel = 'Welcome to TrackUploader!';
        $subtitel = '';
        break;
    default:
        $titel = 'Welcome to TrackUploader!';
        $subtitel = '';
}

if(isset($subtitel))$itemSubTitel = '<p class="subtitel">' . $subtitel .'</p>';
else $itemSubTitel = '';

return
"
<nav>
<a href='index.php?pagina=gallerij'>
    <svg class='svg2'>
        <text x='10' y='25' >Gallery</text></svg></a>
<a href='index.php?pagina=upload'>
    <svg class='svg1'>
        <text x='10' y='25' >Add Track</text></svg></a>
<a href='index.php?pagina=delete'>
    <svg class='svg3'>
        <text x='10' y='25' >Admin</text></svg></a>

</nav>

<div class='titel'>
    <hr class='hrTitel'>
    <div class='hoofdtitel' >
        <h1><span> $titel </span></h1>
    </div>
    $itemSubTitel
    <hr class='hrTitel'>
</div>
";
?>

<!-- BEWERKTE WIDGET
<div >
    <div style='display:inline-block'>
        <div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:rgba(10, 10, 10, 0.5);'><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=en';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script> 
        </div> 
    </div>
</div>
-->

<!-- ORIGINAL widget
<div id='right'>
 <div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:rgba(10, 10, 10, 0.5);'><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=en';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script> </div> 
</div>
-->
