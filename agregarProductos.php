<?php
	include_once 'apiProductos.php';
	$api = new apiProductos();

	if(isset($_POST['producto']) )
	{

		if($_POST['producto'])
		{
			$item = array(
				'id'=> $row['id'],
				'nombre'=> $row['nombre'],
				'Marca'=> $row['Marca'],
				'tipo'=> $row['tipo'],
				'categoria'=> $row['categoria'],
				'subcate'=> $row['subcate'],
				'subcate1'=> $row['subcate1'],
				'descripcion'=> $row['descripcion'],
				'pimagen'=> $row['pimagen']
			);

	/*		foreach ($arr as $key=>$item){
					    echo "$key => $item <br>";
					}*/


			$api -> agregarProducto($item);
		}else
		{
			$api->error('No pudo guardarse los datos');
		}

	}else
	{
		$api->error('Error al llamar a la API');
	}

?>