<?php

namespace TiendaWeb\UI;

class Categoria extends Pagina{

	function mostrar(){
		$doc = parent::getPlantilla();

		$this->verCategorias($doc);
		
		//Mostrar en Main los productos de la categoría
		$listaProductos = \TiendaWeb\APP\TiendaWeb::verProductosPorIdCategoria($_REQUEST['id']);
		
		//Añadimos los productos al main
		
		echo $doc->saveHTML();
	}
	
}