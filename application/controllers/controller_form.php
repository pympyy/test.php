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
		$this->view->generate('form_view.php', 'template_view.php', $data);
	}
	
	function action_createtable()
	{
		$data = $this->model->get_data();
		$this->view->generate('form_view.php', 'template_view.php', $data);
	}
}