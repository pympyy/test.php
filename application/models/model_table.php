<?php

class Model_Table extends Model
{
	public function get_data()
	{			
	// формируем масссив массивов записей
		$table_name = htmlspecialchars($_GET["table_name"]);

		$query = "SELECT * FROM `catalog` WHERE `table_name` = '$table_name';";
			
		$result = mysqli_query($this->db, $query);

		return $result;
	}
	public function get_search_data()
	{
	// формируем масссив массивов записей поиска
		$table_name = htmlspecialchars($_GET["table_name"]);
		$kod = htmlspecialchars($_GET["Kod"]);

		$query = "SELECT * FROM `catalog` WHERE `Kod` LIKE '%$kod%' AND `table_name` = '$table_name';";
		// $query = "SELECT * FROM `catalog` WHERE MATCH (Kod,table_name) AGAINST ('$kod');";
			
		$result = mysqli_query($this->db, $query);

		return $result;
	}
	public function get_edit_data()
	{
	// формируем масссив массивов записей поиска
		$table_name = htmlspecialchars($_GET["table_name"]);
		$id = htmlspecialchars($_GET["id"]);

		$query = "SELECT * FROM `catalog` WHERE `id` = '$id' AND `table_name` = '$table_name';";
		// $query = "SELECT * FROM `catalog` WHERE MATCH (Kod,table_name) AGAINST ('$kod');";

		$result = mysqli_query($this->db, $query);

		return $result;
	}
	public function edition()
	{
	// формируем масссив массивов записей поиска
		$id = htmlspecialchars($_POST["id"]);
		$name = htmlspecialchars($_POST["Name"]);
		$razdel = htmlspecialchars($_POST["Razdel"]);
		$global_id = htmlspecialchars($_POST["global_id"]);
		$idx = htmlspecialchars($_POST["Idx"]);
		$kod = htmlspecialchars($_POST["Kod"]);
		$nomdescr = htmlspecialchars($_POST["Nomdescr"]);
		$table_name = htmlspecialchars($_POST["table_name"]);

		$query = "UPDATE `catalog` SET 
			`Name`='$name',
			`Razdel`='$razdel',
			`global_id`='$global_id',
			`Idx`='$idx',
			`Kod`='$kod',
			`Nomdescr`='$nomdescr'
			WHERE `id` = $id
			;
		";

		$result = mysqli_query($this->db, $query);
	}

	public function delete()
	{
		$id = htmlspecialchars($_GET["id"]);

		$query = "DELETE FROM `catalog` WHERE `id` = $id";

		$result = mysqli_query($this->db, $query);
	}

	public function add()
	{
		$id = htmlspecialchars($_POST["id"]);
		$name = htmlspecialchars($_POST["Name"]);
		$razdel = htmlspecialchars($_POST["Razdel"]);
		$global_id = htmlspecialchars($_POST["global_id"]);
		$idx = htmlspecialchars($_POST["Idx"]);
		$kod = htmlspecialchars($_POST["Kod"]);
		$nomdescr = htmlspecialchars($_POST["Nomdescr"]);
		$table_name = htmlspecialchars($_POST["table_name"]);

		$query = "INSERT INTO `catalog` (`Name`, `Razdel`, `global_id`, `Idx`, `Kod`, `Nomdescr`, `table_name`) VALUES ('$name', '$razdel', '$global_id', '$idx', '$kod', '$nomdescr', '$table_name');";
		$result = mysqli_query($this->db, $query);
	}
}