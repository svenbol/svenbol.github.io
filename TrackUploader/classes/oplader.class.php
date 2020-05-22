<?php

class oplader {
	private $filename;
	private $fileData;
	private $destination;
	private $folder;

	public function __construct( $key ) {
		$this->filename = $_FILES[$key]['name'];
		$this->fileData = $_FILES[$key]['tmp_name'];
	}

/*
	public function saveIn( $folder ) {
		$this->destination = $folder;
	}
*/
	public function save(){
	    //$destination = "http://svenbol.000webhostapp.com/TrackUploader/views/img";
	    $destination = "/storage/ssd4/973/7180973/TrackUploader/img"
	    $folderIsWriteAble = is_writable( $this->destination );
		
		if( isset($folderIsWriteAble) ){
			$name = $this->filename;

            echo ' ----> Name: ' . $name . "\r \n";
            echo ' ----> Destination: ' . $destination . "\r \n";
            
			$succes = move_uploaded_file($name,$destination); //or die("move_uploaded_file error gemaakt || \r \n ");
		} else {
			trigger_error("Cannot$$ write to $this->destination");
			$succes = false;
		}
		return $succes;
	}
}

?>