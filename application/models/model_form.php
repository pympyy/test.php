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
				    	$sql2 = $this->db->prepare("
					    	INSERT INTO `table_names` (table_name) 
					    	VALUES (?)
				    	");
						}else{
							// логировать ошибку
							//echo "Не удалось подготовить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
						}
				    	if ($sql->bind_param("ssissss", $name, $razdel, $global_id, $idx, $kod, $nomdescr, $table_name)) {
					    	$sql->bind_param("ssissss", $name, $razdel, $global_id, $idx, $kod, $nomdescr, $table_name);
					    	$sql2->bind_param("s", $table_name);
					    	$sql->execute();
					    	$sql2->execute();
					    	$sql->close();
					    	$sql2->close();
				    	}else{
				    		// логировать ошибку
				    		//echo "Не удалось привязать параметры: (" . $sql->errno . ") " . $sql->error;
				    	}

					}


				}else{
				// логировать ошибку echo "Возможная атака с помощью файловой загрузки!\n";
				}

			}else{
				//генерировать ошибку по файлу
			}
		
		unlink($uploadfile);
		}else{
			//генерировать ошибку по имени
		}

	}
	
	public function get_table_names(){
		$query = "SELECT `table_name` FROM `table_names`;";
		// $query = "SELECT * FROM `catalog` WHERE MATCH (Kod,table_name) AGAINST ('$kod');";

		$result = mysqli_query($this->db, $query);

		return $result;
	}


}
