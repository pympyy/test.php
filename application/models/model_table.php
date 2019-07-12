<?php

class Model_Table extends Model
{
	public function get_data()
	{			
	// формируем масссив массивов записей
		$table_name = htmlspecialchars($_GET["table_name"]);
		

		// if ($sql = $this->db->prepare("SELECT * FROM `catalog` WHERE `table_name` = ?;")) {
	    
	 //    $sql = $this->db->prepare("SELECT * FROM `catalog` WHERE `table_name` = ?;");

		// }else{
		// 	// логировать ошибку
		// 	echo "Не удалось подготовить запрос: (" . $sql->errno . ") " . $sql->error;
		// }
  //   	if ($sql->bind_param("s", $table_name)) {
	    	
	 //    	$sql->bind_param("s", $table_name);
	 //    	$sql->execute();
	 //    	$result = $sql->fetchAll();
	 //    	return $result;
	 //    	$sql->close();

  //   	}else{
  //   		// логировать ошибку
  //   		echo "Не удалось привязать параметры: (" . $sql->errno . ") " . $sql->error;
  //   	}

		$query = "SELECT * FROM `catalog` WHERE `table_name` = '$table_name';";
			
		$result = mysqli_query($this->db, $query);

		return $result;
	}
	public function get_search_data()
	{
	// формируем масссив массивов записей
		$table_name = htmlspecialchars($_GET["table_name"]);
		$kod = htmlspecialchars($_GET["Kod"]);

		$query = "SELECT * FROM `catalog` WHERE `Kod` = '$kod' AND `table_name` = '$table_name';";
		// $query = "SELECT * FROM `catalog` WHERE MATCH (Kod,table_name) AGAINST ('$kod');";
			
		$result = mysqli_query($this->db, $query);

		return $result;
	}
}