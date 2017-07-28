<?php

namespace TiendaWeb\DAO;

class Producto{

	static function verPorIdCategoria($idCategoria){
		$bd = new BD();
		
		$sql  = "SELECT id, nombre, precio, descripcion, imagen ";
		$sql .= "FROM producto ";
		$sql .= "JOIN categoria_producto ON categoria_producto.idProducto = producto.id ";
		$sql .= "WHERE categoria_producto.idCategoria = ".$idCategoria;
		
		echo $sql;
		
		if (($resultSet = $bd->query($sql)) === 0)
			die('Error de Query (' . $bd->errno . ') '. $bd->error);
		
		$listaProductos = array();
		while(($row = $resultSet->fetch_assoc()) != NULL){
			$item = new \TiendaWeb\DOM\Producto($row['id'], utf8_encode($row['nombre']), utf8_encode($row['descripcion']), utf8_encode($row['precio']), utf8_encode($row['imagen']));
			array_push($listaProductos, $item);
		}
		
		$resultSet->close();
		
		return $listaProductos;
	}
	
	static function cargar($id){
		$bd = new BD();
		
		if (($resultSet = $bd->query("SELECT  id, nombre, precio, descripcion, imagen FROM producto WHERE id = ".$id)) === 0)
			die('Error de Query (' . $bd->errno . ') '. $bd->error);
		
		if(($row = $resultSet->fetch_assoc()) != NULL){
			$producto = new \TiendaWeb\DOM\Producto($row['id'], utf8_encode($row['nombre']), utf8_encode($row['descripcion']), utf8_encode($row['precio']), utf8_encode($row['imagen']));
		}
		else{
			die('Error id de Producto Desconocido');
		}
		
		$resultSet->close();
		
		return $producto;
	}

}
