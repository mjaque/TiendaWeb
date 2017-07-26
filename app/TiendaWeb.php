<?php

namespace TiendaWeb\APP;
/* GRASP:
	
*/


class TiendaWeb {

	static function verListaCategorias(){
		return \TiendaWeb\DOM\Categoria::verLista();
	}
	
	static function verProductosPorIdCategoria($idCategoria){
		return \TiendaWeb\DOM\Producto::verPorIdCategoria($idCategoria);
	}
}