<?php

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

	static function verLista(){
		return DAOCategoria::verLista();
	}
}