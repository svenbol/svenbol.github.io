<?php
class Page{
	public $favicon = "";
	public $title = "";
 	public $content = "";
 	public $css = "";
 	public $bootstrapCss = "";
 	public $bootstrapJs = "";

 	public function addCss($href) {
 		$this->css .= "<link href='$href' rel='stylesheet'/>";
 	}
}