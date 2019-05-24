
<?php 

include_once 'db.php';

/**
 * 
 */
class Productos extends DB
{
	
	function obtenerProductos()
	{
		$query = $this->connect()->query('SELECT * FROM productos');

		return $query;

	}

	function obtenerProducto($id)
	{
		$query = $this->connect()->prepare('SELECT  * FROM productos where id= :id');
		$query->execute(['id' => $id]);

		return $query;

	}

	function nuevoProducto($producto)
	{

		$query = $this->connect()->prepare('INSERT INTO productos (nombre, Marca, tipo, categoria, subcate, subcate1, descripcion, pimagen) values (:nombre, :Marca, :tipo, :categoria, :subcate, :subcate1, :descripcion, :pimagen)');
		$query->execute(['nombre' => $producto['nombre'], 
						'Marca' => $producto['Marca'], 
						'tipo' => $producto['tipo'],
						'categoria' => $producto['categoria'],
						'subcate' => $producto['subcate'],
						'subcate1' => $producto['subcate1'],
						'descripcion' => $producto['descripcion'],
						'pimagen' => $producto['pimagen']]);

		return $query;
	}

	/*
	Tercera funcionalidad, agregar categoria
	*/


}
?>