<?php
    require_once('inc/cabecera.php');
?>
	<header>
		<p>TiendaWeb - tu tienda de webs</p>
	</header>

<?php
    require_once('inc/nav.php');
?>
	
	<aside style="float:left; width:22%; margin-top: 0px;">
		<h2>Categorías</h2>
		<?php
			require_once('inc/bd.php');
			$bd = new BD();
			echo $bd->verListaCategorias();
		?>
	</aside>
		
	<main style="margin-left: 24%; width:75%; min-height:200px">
		MAIN (tabla de productos destacados)
	</main>

<?php
    require_once('inc/pie.php');
?>
