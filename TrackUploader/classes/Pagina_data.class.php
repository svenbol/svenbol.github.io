<?php
class Pagina_Data {
 public $titel = "";
 public $intro ="";
 public $content = "";
 public $css = "";
 public $embeddedStyle = "";
 //object aanmaken
 public function addCss($href) {
 	$this->css .= "<link href='$href' rel='stylesheet'/>";
 }
} 
?>