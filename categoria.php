<?php
require_once('inc/cabecera.php');

?>
	<header>
		<p>TiendaWeb - tu tienda de webs</p>
	</header>
							
	<nav style="margin-top: 1.1em">
		<div class="row">
			<div class="col-md-8">
				NAV - Buscador y carrito
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div><!-- /input-group -->
			</div>
		</div>
	</nav>
	
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
	
	<footer>
		FOOTER
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
   </body>
</html>