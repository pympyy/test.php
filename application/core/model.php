<?php

class Model
{
    protected $db;
    public function __construct()
    {
        $obj_db = new DB();
        $this->db = $obj_db->connect();
    }

	// метод выборки данных
	public function get_data()
	{

	}
}