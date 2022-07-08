<?php
class Page{
	public $favicon = "";
	public $title = "";
	public $navbar = "";
 	public $content = "";
 	public $css = "";
 	public $bootstrapCss = "";
 	public $bootstrapJs = "";
 	public $script = "";

 	public function addCss($href) {
 		$this->css .= "<link href='$href' rel='stylesheet'/>";
 	}

 	public function addFavicon($href){
 		$this->favicon = "<link rel='icon' type='image/png' href='$href'>";
 	}

 	public function addJs($href){
 		$this->script = "<script src='$href' type='text/javascript'></script>";
 	}
 
}