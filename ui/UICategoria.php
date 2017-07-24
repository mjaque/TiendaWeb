<?php

class UICategoria extends Pagina{

	function mostrar(){
		$doc = parent::getPlantilla();

		$this->verCategorias($doc);
		
		//Mostrar en Main los productos de la categoría
		$categoria = new Categoria($_REQUEST['id']);
		$listaProductos = $categoria->verProductos();
		
		//Añadimos los productos al main
		
		echo $doc->saveHTML();
	}
	
}