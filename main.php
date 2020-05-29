<?php
    $bd = [];

    function crearArticulo(&$bd, $nomCategoria, $subCategoria = "", $nombre = "", $precio = "", $stock = ""){
        if(isset($bd["Categoria"][$nomCategoria]) && !empty($nombre) && !empty($precio) && !empty($stock)){
          if(!empty($subCategoria) && !empty($nomCategoria)){
              if(isset($bd["Categoria"][$nomCategoria]["Categoria"][$subCategoria])){
                $bd["Categoria"][$nomCategoria]["Categoria"][$subCategoria][] = [$nombre, $precio, $stock];
                return true;
              }
            return false;   
          }else if(!empty($nomCategoria)){
            $bd["Categoria"][$nomCategoria][] = [$nombre, $precio, $stock];
                return true;
            }
        }
        return false;
    }

    function crearCategoria(&$bd, $categoria){
        if(!isset($bd["Categoria"][$categoria])){                                                // Si no existe esta categoria en la base de datos.
            $bd["Categoria"][$categoria] = [];                                      // Crea la categoria en la base de datos.
          return true;                                                              // Fue creada con exito.
        }
        return false;                                                               // Fallo la creacion.
    }

    function crearSubCategoria(&$bd, $categoria, $subCategoria){                                                        // Una Categoria existente y una sub Categoria a crear.
        if(!crearCategoria($bd, $categoria) && !isset($bd["Categoria"][$categoria]["Categoria"][$subCategoria])){       // Si no se puede crear la categoria porque ya existe y si la categoria seleccionada esta vacía
            return crearCategoria($bd["Categoria"][$categoria], $subCategoria);                                                      // Dentro de esa categoria crear una nueva categoria.
        }
        return false;                                                                                                   // Fallo la creación.
    }

    //Pruebas
    crearCategoria($bd, "Liquidos");
        crearArticulo($bd, "Liquidos", "", "Agua", 50.99, 5);
        
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

<?php
        foreach ($bd["Categoria"] as $dirCategoria => $bdSubCategoria){ // <!--isset($bdSubCategoria["Categoria"]) -->
            $i = 0;
            foreach ($bdSubCategoria as $bdArticulos){
                if(!isset($bdSubCategoria["Categoria"])){
                    include 'main/producto.php';
                    $i++;
                }else{
                    foreach ($bdArticulos as $dirSubCategoria => $articulos){
                        $i = 0;
                        foreach ($articulos as $articulo){
                            include 'main/producto.php';
                            $i++;
                        }
                    } 
                }
            }
        }
?>