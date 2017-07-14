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
		<h1><?php echo $bd->verTituloCategoria( filter_input( INPUT_GET, 'categoria', FILTER_SANITIZE_ENCODED ) ) ?></h1>

        <?php echo $bd->verTablaProductos( filter_input( INPUT_GET, 'categoria', FILTER_SANITIZE_ENCODED ) ) ?>

	</main>

<?php
    require_once('inc/pie.php');
?>