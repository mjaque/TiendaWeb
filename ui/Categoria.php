<?php

namespace TiendaWeb\UI;

class Categoria extends Pagina{

	function mostrar(){
		$doc = parent::getPlantilla();

		$this->verCategorias($doc);
		
		$categoria = \TiendaWeb\APP\TiendaWeb::verCategoriaPorId($_REQUEST['id']);
		
		//Ponemos el título
		$h1 = $doc->createElement('h1', $categoria->getNombre());
		$doc->getElementById('main')->appendChild($h1);
		
		//Mostrar en Main los productos de la categoría
		$listaProductos = \TiendaWeb\APP\TiendaWeb::verProductosPorIdCategoria($_REQUEST['id']);
		$table = $doc->createElement('table');
		$table->setAttribute('id', 'tablaProductos');
		$contador = 0;
		foreach($listaProductos as $producto){
			if ($contador % 3 == 0){
				$tr= $doc->createElement('tr');
				$table->appendChild($tr);
			}
			
			$td= $doc->createElement('td');
			$img= $doc->createElement('img');
			$img->setAttribute('src', utf8_encode( $producto->getImagen() ));
			$img->setAttribute('alt',utf8_encode( $producto->getNombre() ));
			$img->setAttribute('style','width:150px');
			$td->appendChild($img);
			
			$p = $doc->createElement('p', utf8_encode($producto->getNombre()) . ': '. utf8_encode( $producto->getPrecio() ). ' €/kilo');
			$td->appendChild($p);
			
			$a = $doc->createElement('a', 'Ver detalles');
			$a->setAttribute('href', 'clase=Producto&metodo=verDetalles&id='.$producto->getId());
			$p2 = $doc->createElement('p');
			$p2->appendChild($a);
			$td->appendChild($p2);
			
			$tr->appendChild($td);
			$contador++;
		}
		
		$doc->getElementById('main')->appendChild($table);
		
		echo $doc->saveHTML();
	}
	
}