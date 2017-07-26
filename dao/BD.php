<?php

namespace TiendaWeb\DAO;

class BD extends \mysqli{		//Usamos la clase general de mysqli
	function __construct(){
		parent::__construct('localhost', 'TiendaWeb', 'TiendaWeb', 'TiendaWeb');
		if ($this->connect_error)
			die('Error de Conexión (' . $this->connect_errno . ') '. $this->connect_error);
	}
	
}