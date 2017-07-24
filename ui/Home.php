<?php

class Home extends Pagina{

	function mostrar(){
		$doc = parent::getPlantilla();

		$this->verCategorias($doc);
		
		//TODO: Mostrar los productos Destacados
		
		echo $doc->saveHTML();
	}
	
	
	
}