<?php

	if (isset($_POST['table_name'])) {
		
		$table_name = $_POST['table_name'];


		// $target_dir = "uploads/";
		// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		// $uploadOk = 1;
		// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// // Check if image file is a actual image or fake image
		// if(isset($_POST["submit"])) {
		//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		//     if($check !== false) {
		//         echo "File is an image - " . $check["mime"] . ".";
		//         $uploadOk = 1;
		//     } else {
		//         echo "File is not an image.";
		//         $uploadOk = 0;
		//     }
		// }


		// $mysqli = new mysqli ("localhost", "root", "", "xmlBase");
		// $mysqli->query ("CREATE TABLE `xmlbase`.`$table_name` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
		echo "создана таблица с именем $table_name";

	}
	


?>