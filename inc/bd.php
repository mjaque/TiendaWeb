<?php

class BD{

	private $conexion;

	function __construct(){
		$this->conexion = new mysqli('localhost', 'TiendaWeb', 'TiendaWeb', 'TiendaWeb');
		if ($this->conexion->connect_error)
			die('Error de Conexión (' . $this->conexion->connect_errno . ') '. $this->conexion->connect_error);
	}
	
	function verListaCategorias(){
		$html = '<ul>';
		if (($resultSet = $this->conexion->query("SELECT nombre, id FROM Categoria WHERE idPadre IS NULL")) === 0)
			die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);
			
		while(($row = $resultSet->fetch_assoc()) != NULL){
			$html .= '<li><a href="categoria.php?categoria=' . $row[ 'id'] . '">'. utf8_encode($row['nombre']). '</a></li>';
			$html .= "\n";
		}
		$html .= '</ul>';
		
		return $html;
	}

    function verTituloCategoria( $idCategoria )
    {
        if( ($resultSet = $this->conexion->query( "SELECT nombre FROM categoria WHERE id = $idCategoria" ) ) === 0 )
            die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);

        if(($row = $resultSet->fetch_assoc()) == NULL)
        {
            die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);
        }
        return utf8_encode( $row[ 'nombre' ] );
    }
}
	
			
	