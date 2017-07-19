<?php

class DAOCategoria{

	static function verLista(){
	
		$bd = new BD();
		
		if (($resultSet = $bd->query("SELECT nombre, id FROM categoria WHERE idPadre IS NULL")) === 0)
			die('Error de Query (' . $bd->errno . ') '. $bd->error);
		
		$listaCategorias = array();
		while(($row = $resultSet->fetch_assoc()) != NULL){
			$categoria = new Categoria($row['id'], utf8_encode($row['nombre']), null);
			array_push($listaCategorias, $categoria);
		}
		
		$resultSet->close();
		
		return $listaCategorias;
	}

}
