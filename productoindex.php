<?php
	include_once 'apiProductos.php';
	$api = new apiProductos();

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		if(is_numeric($id))
		{
			$api->getById($id);
		}else
		{
			$api->error('El valor debe ser numerico');
		}
		
	}else
	{
		$api->getall();
	}
	

?>