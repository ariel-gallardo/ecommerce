<?php
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
            if(isset($_POST)){
                if(subirFoto()){
                    if(buscarUsuario() === null)
                    $passEncriptado = password_hash($_POST["Password"],PASSWORD_DEFAULT);
                    if(password_verify($_POST["Password_Verify"],$passEncriptado)){
                        return [
                            "Nombre" => $_POST["Nombre"],
                            "Apellido" => $_POST["Apellido"],
                            "Provincia" => $_POST["Provincia"],
                            "Localidad" => $_POST["Localidad"],
                            "Calle" => $_POST["Calle"],
                            "Correo" => $_POST["Correo"],
                            "Password" => $passEncriptado
                        ];
                    }
                }
            }
            return null;
        }

        function almacenarUsuario(){
            $usuarios = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt"),true);
            $usuarios[] = crearUsuario();
            $usuarios = json_encode($usuarios);
            file_put_contents($_SERVER["DOCUMENT_ROOT"]."\db\usuarios.txt",$usuarios);
        }

    //Inicio de sesion del usuario
    function loguearUsuario($usuario){
        if(isset($usuario)){
            setcookie("Correo",$usuario["Correo"]);
            setcookie("Password",$usuario["Password"]);
            return true;
        }
        return false;
    }

    function desloguearUsuario(){
        setcookie("Correo","",-1);
        setcookie("Password","",-1);
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
?>   



