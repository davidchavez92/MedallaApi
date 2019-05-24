<?php
	include_once 'apiCategorias.php';
	$api = new apiCategorias();

	if(isset($_GET['categoria']))
	{
		$cat = $_GET['categoria'];

		if(is_string($cat))
		{
			$api->getByCat($cat);
		}else
		{
			$api->error('El valor debe ser texto');
		}
		
	}else
	{
		$api->getall();
	}
	

?>