<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Test PHP MVC</title>
		
	</head>
	<body>
			
	<ul class="list">
		<li class="first "><a href="/">Главная</a></li>
		<li><a href="/services">Услуги</a></li>
		<li><a href="/portfolio">Портфолио</a></li>
		<li class="last"><a href="/contacts">Контакты</a></li>
	</ul>
	<div id="content">
		<div class="box">
			<?php include 'application/views/'.$content_view; ?>

		</div>
		<br class="clearfix" />
	</div>
	
	</body>
</html>