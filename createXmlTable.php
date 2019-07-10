<?php

	if (isset($_POST['table_name'])) {
		
		$table_name = $_POST['table_name'];
		$mysqli = new mysqli ("localhost", "root", "", "xmlBase");
		$mysqli->query ("CREATE TABLE `xmlbase`.`$table_name` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

	}
	


?>