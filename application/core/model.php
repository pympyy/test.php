<?php

class Model
{
    protected $db;
    public function __construct()
    {
        $this->db = (new DB())->connect();
    }

	// метод выборки данных
	public function get_data()
	{
		
	}

	protected function createLog($log)
	{
		
	}
}