<?php
	class PageModel {
 		public $title = ""; //
 		public $intro ="";
 		public $body = "";
 		public $css = "/css.css";
 		public $bootstrap ="";
 		
 		public function addCss($href) {
 			$this->css .= "<link href='$href' rel='stylesheet'/>";
 		}
	} 
?>