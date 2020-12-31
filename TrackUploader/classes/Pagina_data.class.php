<?php
class Pagina_Data {
 public $titel = "";
 public $intro ="";
 public $content = "";
 public $css = "";
 public $bootstrapCss = "";
 public $bottomScripts = "";
 public $favicon ="";

 //object aanmaken
 public function addCss($href) {
 	$this->css .= "<link href='$href' rel='stylesheet'/>";
 }

} 
?>