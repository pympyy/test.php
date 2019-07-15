<?php

class View
{
	function generate($content_view, $template_view, $data = null, $editResult = null, $tableNames = null)
	{
		include 'application/views/'.$template_view;
	}
}
