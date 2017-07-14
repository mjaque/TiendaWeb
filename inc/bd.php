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
		if (($resultSet = $this->conexion->query("SELECT nombre, id FROM categoria WHERE idPadre IS NULL")) === 0)
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
        $html = '<table id="tablaProductos">';
        if ( ($resultSet = $this->conexion->query
            ( "SELECT id, nombre, precio, imagen
                FROM producto INNER JOIN categoria_producto
                ON producto.id = categoria_producto.idProducto
                WHERE categoria_producto.idCategoria = $idCategoria" ) ) === 0
        )
            die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);

        $contador = 0;
        while(($row = $resultSet->fetch_assoc()) != NULL)
        {
		if ($contador % 3 == 0)
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
                $html .= '<p><a href="ficha.php?id='.$row['id'].'">Ver detalles</a></p>';
                $html .= '</td>';
                if ($contador % 3 == 2)
			$html .= '</tr>';
                $contador++;
        }
        $html .= '</table>';

        return $html;
    }

    function verFichaProducto($idProducto){
	if ( ($resultSet = $this->conexion->query
		( "SELECT nombre, descripcion, precio, imagen
                FROM producto WHERE id = $idProducto" ) ) === 0
        )
		die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);

	if(($row = $resultSet->fetch_assoc()) == NULL)
		die('Error de Query (' . $this->conexion->errno . ') '. $this->conexion->error);
		
	$html = '<h1>'.$row['nombre'].'</h1>';
	$html .= '<img src="'.$row['imagen'].'" alt="'.$row['nombre'].'" style="width:250px"/>';
	$html .= '<p>'.$row['nombre'].': '.$row['precio'].' &euro;/kilo</p>';
	$html .= '<p>'.$row['descripcion'].'</p>';
	
	return utf8_encode($html);
    }
}