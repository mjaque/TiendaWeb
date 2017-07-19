<?php

class Home extends Pagina{

	function mostrar(){
		$doc = parent::getPlantilla();

		$listaCategorias = TiendaWeb::verListaCategorias();
		print_r($listaCategorias);
		
		//echo $doc->saveHTML();
	}
	
}