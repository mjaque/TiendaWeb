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

    function verTablaProductos( $idCategoria )
    {
        $html = '<table>';
        if ( ($resultSet = $this->conexion->query
            ( "SELECT nombre, precio, imagen
                FROM producto INNER JOIN categoria_producto
                ON producto.id = categoria_producto.idProducto
                WHERE categoria_producto.idCategoria = $idCategoria" ) ) === 0
        )
            die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);

        $row = 1;
        while(($row = $resultSet->fetch_assoc()) != NULL)
        {
                $html .= '<tr>';
                $html .= '<td>';
                $html .= '<img src="' . utf8_encode($row['imagen'])
                            . '" alt="'
                            . utf8_encode( $row['nombre'] )
                            .'" style="width:150px">';
                $html .= '<p>' . utf8_encode($row['nombre'])
                            . ": "
                            . utf8_encode( $row['precio'] )
                            . ' €/kilo</p>';
                $html .= '<p><a href="ficha.php">Ver detalles</a></p>';
                $html .= '</td>';
                $html .= '</tr>';
        }
        $html .= '<table>';

        return $html;
    }
}
	
			
	