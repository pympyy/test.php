<?php

class Controller_Form extends Controller
{

	function __construct()
	{
	    parent::__construct();
		$this->model = new Model_Form();
	}
	
	function action_index()
	{		
		$tableNames = $this->model->get_table_names();
		$this->view->generate('form_view.php', 'template_view.php', $data = null, $editResult = null, $tableNames);
	}
	
	function action_createtable()
	{
		// $tableNames = $this->model->get_table_names();
		$data = $this->model->get_data();
		// $this->view->generate('form_view.php', 'template_view.php', $data, $editResult = null, $tableNames);
		$this->redirect('/form/index/');
	}
}