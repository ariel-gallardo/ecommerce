<?php
    $bd = [];

    function crearArticulo(&$bd, $nomCategoria, $subCategoria = "", $nombre = "", $precio = "", $stock = ""){
        if(isset($bd[$nomCategoria]) && !empty($nombre) && !empty($precio) && !empty($stock)){
          if(!empty($subCategoria) && !empty($nomCategoria)){
              if(isset($bd[$nomCategoria][$subCategoria])){
                $bd[$nomCategoria][$subCategoria][] = [$nombre, $precio, $stock];
                return true;
              }
            return false;   
          }else if(!empty($nomCategoria)){
            $bd[$nomCategoria][] = [$nombre, $precio, $stock];
                return true;
            }
        }
        return false;
    }

    function crearCategoria(&$bd, $categoria){
        if(!isset($bd[$categoria])){                                                // Si no existe esta categoria en la base de datos.
            $bd[$categoria] = [];                                                   // Crea la categoria en la base de datos.
          return true;                                                              // Fue creada con exito.
        }
        return false;                                                               // Fallo la creacion.
    }

    function crearSubCategoria(&$bd, $categoria, $subCategoria){                            // Una Categoria existente y una sub Categoria a crear.
        if(!crearCategoria($bd, $categoria) && !isset($bd[$categoria][$subCategoria])){     // Si no se puede crear la categoria porque ya existe y si la categoria seleccionada esta vacía
            return crearCategoria($bd[$categoria], $subCategoria);                          // Dentro de esa categoria crear una nueva categoria.
        }
        return false;                                                                       // Fallo la creación.
    }

    //Pruebas
    crearCategoria($bd, "Audio");
        crearSubCategoria($bd, "Audio", "Auricular");
            crearArticulo($bd, "Audio", "Auricular", "Sony Stereo Headset", 499.99, 10);
            crearArticulo($bd, "Audio", "Auricular", "Philco Stereo Headset", 500.99, 5);
            crearArticulo($bd, "Audio", "Auricular", "Samsung Stereo Headset", 649.99, 20);
    crearCategoria($bd, "Ferreteria");
        crearSubCategoria($bd, "Ferreteria", "Destornillador");
            crearArticulo($bd, "Ferreteria", "Destornillador", "Philips", 59.99, 55);
    crearCategoria($bd, "Perfumeria");
        crearSubCategoria($bd, "Perfumeria", "Masculina");
            crearArticulo($bd, "Perfumeria", "Masculina", "420 Vip Black Men", 499.99, 223);
            crearArticulo($bd, "Perfumeria", "Masculina", "Bleu de Chanel", 799.99, 141);
            crearArticulo($bd, "Perfumeria", "Masculina", "Sauvage Dior", 1099.99, 40);
        crearSubCategoria($bd, "Perfumeria", "Femenina");
            crearArticulo($bd, "Perfumeria", "Femenina", "420 Vip Rose", 699.99, 32);
            crearArticulo($bd, "Perfumeria", "Femenina", "Chance Chanel", 899.99, 81);
            crearArticulo($bd, "Perfumeria", "Femenina", "Biografia", 1299.99, 89);
?>
<!--Seccion de Productos-->
<?php if(!empty($bd)) :?>
    <?php foreach ($bd as $categoria => $value): ?>
    <?php foreach ($value as $subCategoria => $value): ?>
    <?php $i = 0; foreach ($value as $articulo): ?>
    <article class="col my-2">
        <div class="card bg-transparent mx-auto shadow-lg">
            <img class="img-fluid img-thumbnail m-2"
                src="/img/main/producto/<?= $categoria."/".$subCategoria."/".$i.".jpg" ?>">
            <div class="card-body">
                <h6 class="card-title"><?= $articulo[0]; ?></h6>
                <ul class="list-unstyled">
                    <li>$ARS <?= $articulo[1]; ?></li>
                    <li>Stock: <?= $articulo[2]; ?></li>
                    <li class="btn btn-outline-info my-2">Agregar al Carrito</li>
                </ul>
            </div>
        </div>
    </article>
    <?php $i++; endforeach; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
<?php else: ?>
    <h3 class="my-5 border rounded">No hay articulos</h3>
<?php endif; ?>