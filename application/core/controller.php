<?php

class Controller {
	
	public $model;
	public $view;
	
	public function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	public function action_index()
	{
		// todo	
	}


	protected function redirect($url)
	{
		http_response_code(302);
		header("Location: $url"); 
		exit();
	}
}
