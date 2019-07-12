<?php

class Model_Form extends Model
{
	public function get_data()
	{	
		if (isset($_POST['table_name'])) {
			if ($_FILES['fileToUpload']['type'] == "text/xml") {
				$uploaddir = __DIR__."\..\..\uploads\\";//определение директории загрузки файла XML
				$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);//определение директории загрузки файла XML и имени

				//move_uploaded_file — Перемещает загруженный файл в новое место
				if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {

					$table_name = $_POST['table_name'];//установка переменной имени таблицы
					

					// $this->db->query("CREATE TABLE `xmlbase`.`$table_name` (`id` INT NOT NULL AUTO_INCREMENT,`Name` varchar(255) NULL,`Razdel` varchar(255) NULL,`global_id` int(11) NULL,`Idx` varchar(255) NULL,`Kod` varchar(255) NULL,`Nomdescr` TEXT NULL,`table_name` varchar(255) NOT NULL,PRIMARY KEY (`id`)) ENGINE = InnoDB;");
					

					//обращение к классу DB методу connect и выполнение запроса на создание таблицы с именем $table_name и нужными статичными столбцами



					$xml = simplexml_load_file($uploadfile) or die("Error: Cannot create object");//создание обьекта содержащего массив обьектов из файла XML


					foreach ($xml->children() as $row) {//распарсиваем обьект и выполняем запрос добавления в базу
						    $name = $row->Name;
						    $razdel = $row->Razdel;
						    $global_id = $row->global_id;
						    $idx = $row->Idx;
						    $kod = $row->Kod;
						    $nomdescr = $row->Nomdescr;
					    
					    if ($sql = $this->db->prepare("INSERT INTO `catalog` (Name,Razdel,global_id,Idx,Kod,Nomdescr,table_name) VALUES (?,?,?,?,?,?,?)")) {
					    $sql = $this->db->prepare("
					    	INSERT INTO `catalog` (Name,Razdel,global_id,Idx,Kod,Nomdescr,table_name) 
					    	VALUES (?,?,?,?,?,?,?)
				    	");
						}else{
							// логировать ошибку
							echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
						}
				    	if ($sql->bind_param("ssissss", $name, $razdel, $global_id, $idx, $kod, $nomdescr, $table_name)) {
					    	$sql->bind_param("ssissss", $name, $razdel, $global_id, $idx, $kod, $nomdescr, $table_name);
					    	$sql->execute();
					    	$sql->close();
				    	}else{
				    		// логировать ошибку
				    		echo "Не удалось привязать параметры: (" . $sql->errno . ") " . $sql->error;
				    	}

					}


				}else{
				// логировать ошибку echo "Возможная атака с помощью файловой загрузки!\n";
				}

			}else{
				//генерировать ошибку по файлу
			}
		//удаляем XML, нечего его хранить на сервере
		unlink($uploadfile);
		echo "записи попали в базу с индексом ".$table_name;
		}else{
			//генерировать ошибку по имени
		}

	}


}
