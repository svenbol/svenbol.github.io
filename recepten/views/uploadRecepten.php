<?php
		//$id = $_POST['id'];
		$name = $_POST['name']; 
		$photo = $_POST['photo']; 
		$ingredients = $_POST['ingredients'];
		$gram = $_POST['gram'];
		$description = $_POST['description']; 
		$pretime = $_POST['pretime'];
		$dotime = $_POST['dotime'];
		$kitchmat = $_POST['kitchmat']; 
		
		//img init
		$target_dir = "/uploadedfiles/";
        $target_file = $target_dir . basename($_FILES["photoz"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	    
	    if(isset($_POST["submitUploadRecepten"])) {
            $check = getimagesize($_FILES["photoz"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        

		include("connect.php");

		$qry="INSERT INTO tbl_recepten (name,photo,ingredients,gram,kitchmat,description,pretime,dotime) 
		VALUES ('$name','$photo','$ingredients','$gram','$kitchmat','$description','$pretime','$dotime')";

		mysqli_query($con,$qry) 						or die('Uitvoeren query mislukt upload ');

?>