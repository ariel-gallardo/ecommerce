<?php
    if(!isset($_SESSION)){
        session_start();
    }

    // Registración del usuario
        function subirFoto(){
            if(isset($_FILES["Foto"])){
                if($_FILES["Foto"]["error"] === UPLOAD_ERR_OK){
                    move_uploaded_file($_FILES["Foto"]["tmp_name"], dirname(__FILE__)."./../../img/foto/"."idUsuario".".".pathinfo($_FILES["Foto"]["name"], PATHINFO_EXTENSION));
                    return true;
                }
            }
            return false;
        }

        function crearUsuario(){
            if(isset($_POST["Registrar"])){
                if(subirFoto()){
                    if(buscarUsuario() === null)
                    $passEncriptado = password_hash($_POST["Password"],PASSWORD_DEFAULT);
                    if(password_verify($_POST["Password_Verify"],$passEncriptado)){
                        return [
                            "Nombre" => $_POST["Nombre"],
                            "Apellido" => $_POST["Apellido"],
                            "Provincia" => $_POST["Provincia"],
                            "Localidad" => isset($_POST["Localidad"]) ? $_POST["Localidad"] : "Sin Localidad",
                            "Calle" => $_POST["Calle"],
                            "Correo" => $_POST["Correo"],
                            "Password" => $passEncriptado
                        ];
                    }
                }
            }
            return null;
        }

        function modificarUsuario(&$usuarios){
            $_SESSION["Usuario"]["Nombre"] = $_POST["Nombre"];
            $_SESSION["Usuario"]["Apellido"] = $_POST["Apellido"];
            $_SESSION["Usuario"]["Provincia"] = $_POST["Provincia"];
            $_SESSION["Usuario"]["Localidad"] = $_POST["Localidad"];
            $_SESSION["Usuario"]["Calle"] = $_POST["Calle"];

            foreach($usuarios as &$usuarioDB){
                if($usuarioDB["Correo"] === $_SESSION["Usuario"]["Correo"]){
                    $usuarioDB = $_SESSION["Usuario"];
                    return("Se han modificado sus datos correctamente.");
                }
            }
            return null; // "No se han podido modificar sus datos";
        }

        function registrarUsuario(&$usuarios){      
            $usuario = crearUsuario();
            if(isset($usuario)){
                $usuarios[] = $usuario;
                return("Bienvenido nuevo cliente: ".end($usuarios)["Nombre"]);
            }
            return null;
        }

        function obtenerUsuarios(){
            $usuarios = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt"),true);
            return $usuarios;
        }

        function almacenarUsuario($usuarios, $tarea){
            $mensaje = $tarea($usuarios);
            if(isset($mensaje)){
                $usuarios = json_encode($usuarios);
                file_put_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt",$usuarios);
                return $mensaje;
            }
            return null;
        }

    //Inicio de sesion del usuario
    function loguearUsuario($usuario){
        if(isset($usuario)){
            if(isset($_POST["cookies"])){
                setcookie("Correo",$usuario["Correo"],time() + 3600 * 24 * 7);
                setcookie("Password",$usuario["Password"],time() + 3600 * 24 * 7);
            }
            $_SESSION["Usuario"] = $usuario;
            return "Bienvenido ".$_SESSION["Usuario"]["Nombre"];
        }
        return "No se encuentra un usuario con esos datos.";
    }

    function desloguearUsuario(){
        if(isset($_COOKIE["Correo"]) && isset($_COOKIE["Password"])){
            setcookie("Correo","",-1,'/');
            setcookie("Password","",-1,'/'); 
        }
        session_destroy();
        return "Adios hasta la proxima.";
    }       

    // Busqueda del usuario
    function buscarUsuario(){
        $usuarios = obtenerUsuarios();
        if(isset($usuarios)){
            foreach($usuarios as $usuario){
                if(isset($_POST["Loguear"]) ? $usuario["Correo"] === $_POST["Correo"] : $usuario["Correo"] === $_COOKIE["Correo"]){
                    if(isset($_POST["Loguear"]) ? password_verify($_POST["Password"],$usuario["Password"]) : $_COOKIE["Password"] === $usuario["Password"]){
                        return $usuario;
                    }
                }
            }
        }
        return null;
    }

    function actualizarSolicitud($mensaje){
        echo "<script>
                alert('".$mensaje."');
                window.location.href = window.location.href;
             </script>";
    }

    /*
        Cada vez que se envia alguna solicitud 
        via post o al iniciar el navegador
        ocurre alguna de estas acciones
    */

    if(isset($_COOKIE["Correo"],$_COOKIE["Password"]) && !isset($_SESSION["Usuario"])){
        actualizarSolicitud(loguearUsuario(buscarUsuario()));
    }
    
    if(isset($_POST)){
        switch(array_key_last($_POST)){
            case "Registrar":
                $mensaje = almacenarUsuario(obtenerUsuarios(),'registrarUsuario');
                actualizarSolicitud(isset($mensaje) ? $mensaje : "Ya existe el usuario" );
            break;
            case "Loguear":  
                actualizarSolicitud(loguearUsuario(buscarUsuario()));
            break;
            case "modificarPerfil":
                $mensaje = almacenarUsuario(obtenerUsuarios(),'modificarUsuario');
                actualizarSolicitud(isset($mensaje) ? $mensaje : "No se ha logrado modificar." );
            break;
            case "salirPerfil":
                actualizarSolicitud(desloguearUsuario());
            break;
        }
    }

?>



