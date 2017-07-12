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
		<h1>Frutas Tropicales</h1>
		<table>
			<tr>
				<td>
					<img src="img/platanos.jpg" alt="fruta1" style="width:150px"/>
					<p>Plátanos:  2.4 €/kilo</p>
					<p><a href="ficha.php">Ver detalles</a></p>
				</td>
				<td>
					<img src="img/platanos.jpg" alt="fruta1" style="width:150px"/>
					<p>Plátanos:  2.4 €/kilo</p>
					<p><a href="ficha.php">Ver detalles</a></p>
				</td>
				<td>
					<img src="img/platanos.jpg" alt="fruta1" style="width:150px"/>
					<p>Plátanos:  2.4 €/kilo</p>
					<p><a href="ficha.php">Ver detalles</a></p>
				</td>
			</tr>
						<tr>
				<td>
					<img src="img/platanos.jpg" alt="fruta1" style="width:150px"/>
					<p>Plátanos:  2.4 €/kilo</p>
					<p><a href="ficha.php">Ver detalles</a></p>
				</td>
				<td>
					<img src="img/platanos.jpg" alt="fruta1" style="width:150px"/>
					<p>Plátanos:  2.4 €/kilo</p>
					<p><a href="ficha.php">Ver detalles</a></p>
				</td>
				<td>
					<img src="img/platanos.jpg" alt="fruta1" style="width:150px"/>
					<p>Plátanos:  2.4 €/kilo</p>
					<p><a href="ficha.php">Ver detalles</a></p>
				</td>
			</tr>
		</table>
	</main>

<?php
    require_once('inc/pie.php');
?>