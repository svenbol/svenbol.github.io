<?php
class Pagina_Data {
 public $titel = "";
 public $intro ="";
 public $content = "";
 public $css = "";
 //object aanmaken
 public function addCss($href) {
 	$this->css .= "<link href='$href' rel='stylesheet'/>";
 }

} 
?>