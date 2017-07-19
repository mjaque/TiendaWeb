<?php
/*GRASP index.php 
	- Cargar el autoload.
	- Abre la sesión.
	- Instancia el objeto de interfaz (iu) y llama al método que pida el usuario.
		- clase
		- metodo
*/
	//1. Cargamos el autoload
	spl_autoload_register(function ($class_name) {
		$class_dirs = ['ui/', 'app/', 'dom/', 'dao/', 'util/'];
		foreach ($class_dirs as $dir) 
			if (is_file($dir . $class_name . '.php'))
				require_once $dir . $class_name . '.php';
	});
	
	//2. Iniciamos la sesión del usuario
	session_start();
	
	//3. index.php?clase=Home&metodo=verProductos...
	if (isset($_REQUEST['clase'])){
		require_once('ui/'.$_REQUEST['clase'].'.php');	//Solo permitimos cargar clases de iu desde index.php
		$clase = "Class".$_REQUEST['clase'];
		//$objeto = new Home();
		//$objeto = new 'Class.Home'();
		$objeto = new $clase();
		if (isset($_REQUEST['metodo'])){
			$objeto->$_REQUEST['metodo']();
		}
	}
	else{
		$home = new Home();
		$home->mostrar();
	}
	