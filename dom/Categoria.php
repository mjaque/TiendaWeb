<?php

namespace TiendaWeb\DOM;

class Categoria{

	private $id;
	private $nombre;
	private $idPadre;
	private $categoriaPadre;

	function __construct($id, $nombre, $idPadre){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->idPadre = $idPadre;
		$this->categoriaPadre = null;
	}
	
	static function crearPorId($id){
		$categoria = \TiendaWeb\DAO\Categoria::cargar($id);
		return $categoria;
	}

	static function verLista(){
		return  \TiendaWeb\DAO\Categoria::verLista();
	}
	
	function verProductos(){
		return  \TiendaWeb\DAO\Producto::verProductosPorCategoria($this);
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function getId(){
		return $this->id;
	}
}