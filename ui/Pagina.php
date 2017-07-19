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
}