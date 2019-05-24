<?php
	include_once 'apiCategorias.php';
	$api = new apiCategorias();

	if(isset($_POST['categoria']) )
	{

		if($_POST['categoria'])
		{
			$item = array(
				'categoria' => $_POST['categoria'],
				'imagen' =>  $_POST['imagen'],
				'otros' =>  $_POST['otros']
			);

	/*		foreach ($arr as $key=>$item){
					    echo "$key => $item <br>";
					}*/


			$api -> agregarCategoria($item);
		}else
		{
			$api->error('No pudo guardarse los datos');
		}

	}else
	{
		$api->error('Error al llamar a la API');
	}

?>