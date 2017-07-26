<?php 

namespace TiendaWeb;

/*GRASP index.php 
	- Cargar el autoload.
	- Abre la sesión.
	- Instancia el objeto de interfaz (iu) y llama al método que pida el usuario.
		- clase
		- metodo
*/
	//1. Cargamos el autoload
	spl_autoload_register(function ($class_name) { //'TiendaWeb\DAO\Categoria'
	
		$trozos = explode('\\', $class_name);
		
		$dir = strtolower($trozos[1]);
		$clase = $trozos[2];
		if (is_file($dir . '/'. $clase . '.php'))
			require_once $dir . '/' . $clase . '.php';
		else{
			echo 'Error al cargar la clase '.$class_name;
			die;
		}
	});
	
	//2. Iniciamos la sesión del usuario
	session_start();
	
	//3. index.php?clase=Home&metodo=verProductos...
	if (isset($_REQUEST['clase'])){
		$clase = '\\TiendaWeb\\UI\\'.$_REQUEST['clase'];
		$objeto = new $clase();
		if (isset($_REQUEST['metodo'])){
			$objeto->{$_REQUEST['metodo']}();
		}
	}
	else{
		$home = new \TiendaWeb\UI\Home();
		$home->mostrar();
	}
	