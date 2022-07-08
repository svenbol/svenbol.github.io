<?php
class Page{
	public $favicon = "";
	public $title = "";
	public $navbar = "";
 	public $content = "";
 	public $css = "";
 	public $script = "";

 	/* GOOGLE FONTS */
 	public $fonts = "<link rel='preconnect' href='https://fonts.gstatic.com'><link href='https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap' rel='stylesheet'>";

 	/* BOOTSTRAP */
 	public $bootstrapMediaQuery = "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
 	public $bootstrapCss = "
 		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
 		";
 	public $bootstrapJs = "
 		<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
		<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
		<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js' integrity='sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s' crossorigin='anonymous'></script>";
 	
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