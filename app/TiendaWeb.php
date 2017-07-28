<?php

namespace TiendaWeb\APP;
/* GRASP:
	Controlador:
		- Gestiona los permisos de acceso.
		- Controla el flujo del intefaz (cambios de página).
*/


class TiendaWeb {

	static function verListaCategorias(){
		return \TiendaWeb\DOM\Categoria::verLista();
	}
	
	static function verProductosPorIdCategoria($idCategoria){
		return \TiendaWeb\DOM\Producto::verPorIdCategoria($idCategoria);
	}
	
	static function verCategoriaPorId($idCategoria){
		return \TiendaWeb\DOM\Categoria::crearPorId($_REQUEST['id']);
	}

}