<?php

include_once 'productos.php';

class apiProductos {
		
		function getAll()
		{
			$producto = new productos();
			$productos = array();
			$productos ["items"] = array();

			$res = $producto->obtenerProductos();

			if($res->rowCount())
			{
				while ($row = $res->fetch(PDO::FETCH_ASSOC))
				{
					//nombre, Marca, tipo, categoria, subcate, subcate1, descripcion, pimagen
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

					array_push($productos['items'], $item);
				}
				header('Content-Type: application/json');
				//echo json_encode($categorias);
				$this->printJSON($productos);

			}
			else
			{
				//echo json_decode(array('mensaje'=> 'No hay elementos registrados'));
				$this->error('No hay elementos registrados');
			}


		}


		/*
		Segunda funcionalidad por 
		id
*/
			function printJSON($array)
			{
				echo  json_encode($array) ;

			}

			function error($mensaje)
			{

				echo '<code>'. json_encode(array('mensaje'=>$mensaje)).'</code>';
			}


			function getById($id)
		{
			$producto = new productos();
			$productos = array();
			$productos ["items"] = array();

			$res = $producto->obtenerProducto($id);

			if($res->rowCount() == 1)
			{
				$row = $res->fetch();
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

					array_push($productos['items'], $item);
				
				header('Content-Type: application/json');
				//echo json_encode($categorias);
				$this->printJSON($productos);

			}
			else
			{
				//echo json_decode(array('mensaje'=> 'No hay elementos registrados'));
				$this->error('No hay elementos registrados');
			}


		}

		/*
		Tercera funcionalidad 
		para agregar una categoria en la base de datos
		*/

		function agregarProducto($item)
		{
				$producto = new productos();
				$res = $producto->nuevpProducto($item);
				$this->exito('Nuevo Producto Registrado');


		}

		function exito($mensaje)
		{
			echo json_encode(array('mensaje'=>$mensaje));	
		}

		/*
		Tercera funcionalidad 
		para agregar una categoria en la base de datos
		*/

//fin de la clase
}




?>