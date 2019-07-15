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
	
	function action_edit()
	{
		$data = $this->model->get_edit_data();
		$this->view->generate('tableedit_view.php', 'template_view.php', $data);
	}
	
	
	function action_edition()
	{
		$editResult = $this->model->edition();
		$this->redirect('/table/index/?table_name='.$_POST['table_name']);
	}
	
	function action_delete()
	{
		$data = $this->model->delete();
		$this->redirect('/table/index/?table_name='.$_GET['table_name']);
	}
	
	function action_addview()
	{
		$this->view->generate('tableadd_view.php', 'template_view.php', $data = null);
	}
	
	
	function action_add()
	{
		$addResult = $this->model->add();
		$this->redirect('/table/index/?table_name='.$_POST['table_name']);
	}
	
}