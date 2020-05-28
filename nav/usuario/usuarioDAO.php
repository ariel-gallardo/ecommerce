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

        function almacenarUsuario($usuario){
            $usuarios = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt"),true);
            if(isset($_SESSION["Usuario"])){
                var_dump($usuario);
                foreach($usuarios as &$usuarioDB){
                    if($usuarioDB["Correo"] === $usuario["Correo"]){
                        $usuarioDB = $usuario;
                    }
                }
            }else{
                $usuarios[] = $usuario;
            }
            $usuarios = json_encode($usuarios);
            file_put_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt",$usuarios);
        }

    //Inicio de sesion del usuario
    function loguearUsuario($usuario){
        if(isset($usuario)){
            if($_POST["cookies"]){
                setcookie("Correo",$usuario["Correo"],time() + 3600 * 24 * 7);
                setcookie("Password",$usuario["Password"],time() + 3600 * 24 * 7);
            }
            $_SESSION["Usuario"] = $usuario;
            return true;
        }
        return false;
    }

    function desloguearUsuario(){
        if(isset($_COOKIE["Correo"]) && isset($_COOKIE["Password"])){
            setcookie("Correo","",-1);
            setcookie("Password","",-1);
        }
        session_destroy();
        actualizarSolicitud("Adios hasta la proxima.");
    }       

    // Busqueda del usuario
    function buscarUsuario(){
        $usuarios = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt"),true);
        if(isset($usuarios)){

            foreach($usuarios as $usuario){
                if(isset($_POST["Correo"]) ? $usuario["Correo"] === $_POST["Correo"] : $usuario["Correo"] === $_COOKIE["Correo"]){
                    if(isset($_POST["Password"]) ? password_verify($_POST["Password"],$usuario["Password"]) : $_COOKIE["Password"] === $usuario["Password"]){
                        return $usuario;
                    }
                }
            }
        }
        return null;
    }

    function modificarUsuario(){
        if($_SESSION["Usuario"]){
            $_SESSION["Usuario"]["Nombre"] = $_POST["Nombre"];
            $_SESSION["Usuario"]["Apellido"] = $_POST["Apellido"];
            $_SESSION["Usuario"]["Provincia"] = $_POST["Provincia"];
            $_SESSION["Usuario"]["Localidad"] = $_POST["Localidad"];
            $_SESSION["Usuario"]["Calle"] = $_POST["Calle"];
        }
    }

    function actualizarSolicitud($mensaje){
        echo "<script>
                alert('".$mensaje."');
                window.location.href = window.location.href;
             </script>";
    }

    if((isset($_POST["Correo"]) && isset($_POST["Password"])) || isset($_COOKIE["Correo"], $_COOKIE["Password"])){
        if(!isset($_SESSION["Usuario"])){ // No hay usuario ingresado en el sistema
            if(isset($_POST["Password_Verify"])){ //Quiere registrarse
                $usuario = crearUsuario();
                if(isset($usuario)){
                    almacenarUsuario($usuario);
                    actualizarSolicitud("Bienvenido nuevo cliente: ".$usuario["Nombre"]);
                }else{
                    actualizarSolicitud("Ya existe la cuenta");
                }
            }else if(loguearUsuario(buscarUsuario())){ //Quiere loguearse.
                actualizarSolicitud("Bienvenido ".$_SESSION["Usuario"]["Nombre"]);
            }else{ //Quiere loguear pero no existe en el sistema.
                unset($_POST["Correo"]);
                unset($_POST["Password"]);
                actualizarSolicitud("No se encuentran sus datos.");
            }
        }
    }

    if(isset($_POST["salirPerfil"])){
        desloguearUsuario();
    }

    if(isset($_POST["modificarPerfil"])){
        modificarUsuario();
        almacenarUsuario($_SESSION["Usuario"]);
        actualizarSolicitud("Se modificaron los datos con exito.");
    }
?>



