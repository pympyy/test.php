<?php

class Controller_Table extends Controller
{

	function __construct()
	{
	    parent::__construct();
		$this->model = new Model_Table();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('table_view.php', 'template_view.php', $data);
	}
	
	function action_search()
	{
		$data = $this->model->get_search_data();
		$this->view->generate('tablesearch_view.php', 'template_view.php', $data);
	}
}