<?php

class Pagina{

	function mostrar(){
		//Página por defecto
	}
	
	function getPlantilla(){
		$doc = new DOMDocument();
		libxml_use_internal_errors(true);
		$doc->loadHTMLFile("ui/inc/plantilla.html");
		libxml_clear_errors();
		
		return $doc;
	}
	
	function verCategorias($doc){
		$listaCategorias = TiendaWeb::verListaCategorias();
		//print_r($listaCategorias);
		
		$ul = $doc->createElement('ul');
		foreach($listaCategorias as $categoria){
			$li = $doc->createElement('li');
			$a = $doc->createElement('a', $categoria->getNombre());
			$a->setAttribute('href', '?clase=categoria&metodo=ver&id='.$categoria->getId());
			$li->appendChild($a);
			$ul->appendChild($li);
		}
		$doc->getElementById('aside')->appendChild($ul);
	}
}