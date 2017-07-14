<?php
    require_once('inc/cabecera.php');
?>
	<header>
		<p>TiendaWeb - tu tienda de webs</p>
	</header>

<?php
    require_once('inc/nav.php');
?>

<?php
    require_once('inc/aside.php');
?>
		
	<main style="margin-left: 24%; width:75%; min-height:200px">
		<?php 
			$bd = new BD();
			echo $bd->verFichaProducto(filter_input( INPUT_GET, 'id', FILTER_SANITIZE_ENCODED ));
		?>
	</main>

<?php
    require_once('inc/pie.php');
?>