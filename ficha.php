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
		<ul>
			<li><a href="categoria.php">Frutas Mediterráneas</a></li>
			<li><a href="categoria.php">Frutas Tropicales</a></li>
			<li><a href="categoria.php">Frutos Secos</a></li>
			<li><a href="categoria.php">Frutas Escarchadas</a></li>		
		</ul>
	</aside>
		
	<main style="margin-left: 24%; width:75%; min-height:200px">
		<h1>Plátanos</h1>
			<img src="img/platanos.jpg" alt="fruta1" style="width:250px"/>
			<p>Plátanos:  2.4 €/kilo</p>
			<p>Plátanos de Canarias, muy ricos y sabrosos. Sin arañas.</p>
	</main>

<?php
    require_once('inc/pie.php');
?>