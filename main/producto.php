<?php
    $directorio = (isset($bdSubCategoria["Categoria"]) ? "/".$dirSubCategoria : "");
    $producto = isset($bdSubCategoria["Categoria"]) ? $articulo : $bdArticulos;
?>

<article class="col my-2">
    <div class="card bg-transparent mx-auto shadow-lg">
        <img class="img-fluid img-thumbnail m-2"
            src="/img/main/producto/<?= $dirCategoria.$directorio."/".$i.".jpg" ?>">
        <div class="card-body">
            <h6 class="card-title"><?= $producto[0]; ?></h6>
            <ul class="list-unstyled">
                <li>$ARS <?= $producto[1]; ?></li>
                <li>Stock: <?= $producto[2]; ?></li>
                <li class="btn btn-outline-info my-2">Agregar al Carrito</li>
            </ul>
        </div>
    </div>
</article>

