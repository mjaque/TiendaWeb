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
	
	function __construct($id){
		$categoria = DAOCategoria::cargar($id);
		$this = $categoria;
	}

	static function verLista(){
		return DAOCategoria::verLista();
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function getId(){
		return $this->id;
	}
}