
<?php 

include_once 'db.php';

/**
 * 
 */
class Categorias extends DB
{
	
	function obtenerCategorias()
	{
		$query = $this->connect()->query('SELECT distinct (categoria) from productos order by categoria ASC');

		return $query;

	}


	/*
	Segunda funcionalidad por id
	*/

	function obtenerCategoria($cat)
	{
		$query = $this->connect()->prepare('SELECT  * FROM productos where categoria= :categoria');
		$query->execute(['categoria' => $cat]);

		return $query;

	}

	/*
	Segunda funcionalidad por id
	*/

	/*
	Tercera funcionalidad, agregar categoria
	*/
	
	//ESTAS FUNCIONES NO DEBIDO A QUE NO AGREGAREMOS A TRAVES DE LA APLICACIÓN
	// function nuevaCategoria($categoria)
	// {

	// 	$query = $this->connect()->prepare('INSERT INTO categorias (Categoria, Imagen, Otros) values (:categoria, :imagen, :otros)');
	// 	$query->execute(['categoria' => $categoria['categoria'], 
	// 					'imagen' => $categoria['imagen'], 
	// 					'otros' => $categoria['otros']]);

	// 	return $query;
	// }

	/*
	Tercera funcionalidad, agregar categoria
	*/


}
?>