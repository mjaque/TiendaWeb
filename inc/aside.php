<aside style="float:left; width:22%; margin-top: 0px;">
    <h2>Categorías</h2>
    <?php
    require_once('inc/bd.php');
    $bd = new BD();
    echo $bd->verListaCategorias();
    ?>
</aside>