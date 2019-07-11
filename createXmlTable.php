<?php

	if (isset($_POST['table_name'])) {
		if ($_FILES['fileToUpload']['type'] == "text/xml") {

			$uploaddir = __DIR__."\uploads\\";
			$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

			//move_uploaded_file — Перемещает загруженный файл в новое место
			if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
			    // echo "Файл корректен и был успешно загружен.\n";

				$table_name = $_POST['table_name'];

				$mysqli = new mysqli ("localhost", "root", "", "xmlBase");

				if ($mysqli->connect_errno) {
				    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}else{

					$mysqli->query ("CREATE TABLE `xmlbase`.`$table_name` (`id` INT NOT NULL AUTO_INCREMENT,`Name` varchar(255) NULL,`Razdel` varchar(255) NULL,`global_id` int(11) NULL,`Idx` varchar(255) NULL,`Kod` varchar(255) NULL,`Nomdescr` TEXT NULL,PRIMARY KEY (`id`)) ENGINE = InnoDB;");

					$xml = simplexml_load_file($uploadfile) or die("Error: Cannot create object");

					$affectedRow = 0;

					foreach ($xml->children() as $i => $row) {
						    $name = $row->Name;
						    $razdel = $row->Razdel;
						    $global_id = $row->global_id;
						    $idx = $row->Idx;
						    $kod = $row->Kod;
						    $nomdescr = $row->Nomdescr;
					    
					    // $sql = "INSERT INTO $table_name(Name,Razdel,global_id,Idx,Kod,Nomdescr) VALUES ('" . $name . "','" . $razdel . "','" . $global_id . "','" . $idx . "','" . $kod . "','" . $nomdescr . "')";
					    if ($sql = $mysqli->prepare("INSERT INTO $table_name(Name,Razdel,global_id,Idx,Kod,Nomdescr) VALUES (?,?,?,?,?,?)")) {
					    $sql = $mysqli->prepare("
					    	INSERT INTO $table_name(Name,Razdel,global_id,Idx,Kod,Nomdescr) 
					    	VALUES (?,?,?,?,?,?)
				    	");
						}else{
							// логировать ошибку
							echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
						}
				    	if ($sql->bind_param("ssisss", $name, $razdel, $global_id, $idx, $kod, $nomdescr)) {
					    	$sql->bind_param("ssisss", $name, $razdel, $global_id, $idx, $kod, $nomdescr);
					    	$sql->execute();
					    	$sql->close();
				    	}else{
				    		// логировать ошибку
				    		echo "Не удалось привязать параметры: (" . $sql->errno . ") " . $sql->error;
				    	}

					}
				}

			} else {
				// логировать ошибку
			    echo "Возможная атака с помощью файловой загрузки!\n";
			}
		}else{
			// логировать ошибку по типу файла
		}
	}else{
		// логировать ошибку по имени
	}


?>

<?php if (! empty($error_message)) { ?>
<div><?php echo nl2br($error_message); ?></div>
<?php } ?>