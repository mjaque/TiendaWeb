<?php

namespace TiendaWeb\DAO;

class Categoria{

	static function verLista(){
	
		$bd = new BD();
		
		if (($resultSet = $bd->query("SELECT nombre, id FROM categoria WHERE idPadre IS NULL")) === 0)
			die('Error de Query (' . $bd->errno . ') '. $bd->error);
		
		$listaCategorias = array();
		while(($row = $resultSet->fetch_assoc()) != NULL){
			$categoria = new \TiendaWeb\DOM\Categoria($row['id'], utf8_encode($row['nombre']), null);
			array_push($listaCategorias, $categoria);
		}
		
		$resultSet->close();
		
		return $listaCategorias;
	}
	
	//Carga una DOM\Categoria a partir de su $id
	static function cargar($id){
		$bd = new BD();
		
		if (($resultSet = $bd->query("SELECT nombre, id FROM categoria WHERE id = ".$id)) === 0)
			die('Error de Query (' . $bd->errno . ') '. $bd->error);
		
		if(($row = $resultSet->fetch_assoc()) != NULL){
			$categoria = new \TiendaWeb\DOM\Categoria($row['id'], utf8_encode($row['nombre']), null);
		}
		else{
			die('Error id de Categoría Desconocido');
		}
		
		$resultSet->close();
		
		return $categoria;
	}

}
