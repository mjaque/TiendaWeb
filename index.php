<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<style>
		header, nav, main, aside, footer{
			border:1px solid black;
			margin: 0.3em;
			background-color:#3366ff;
		}
	</style>
	</head>
    
    <body>
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
		<ul>
			<li><a href="categoria.php">Frutas Mediterráneas</a></li>
			<li><a href="categoria.php">Frutas Tropicales</a></li>
			<li><a href="categoria.php">Frutos Secos</a></li>
			<li><a href="categoria.php">Frutas Escarchadas</a></li>		
		</ul>
	</aside>
		
	<main style="margin-left: 24%; width:75%; min-height:200px">
		MAIN (tabla de productos destacados)
	</main>
	
	<footer>
		FOOTER
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
   </body>
</html>