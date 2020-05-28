<?php
        function buscarUsuario(){
            $usuarios = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/db/usuarios.txt"),true);
            foreach($usuarios as $usuario){
                if($usuario["Correo"] === $_POST["Correo"]){
                    if(password_verify($_POST["Password"],$usuario["Password"])){
                        return $usuario;
                    }
                }
            }
            return null;
        }
        
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
?>

<!-- Formulario de Usuario -->
<div class="tab-pane fade in show active" id="Login" role="tabpanel">
    <form action="." method="POST">
        <input class="form-control my-2" name = "Correo" type = "email" placeholder = "Correo Electronico" required>
        <input class="form-control my-2" name = "Password" type = "password" placeholder = "Contraseña" required>
        <button class="btn btnFormulario mx-1" type = "submit">Ingresar</button>
        <button class="btn btnFormulario mx-1" type = "reset">Vaciar</button>
    </form>
</div>

<?php
    if(isset($_POST)){
        if(isset($_POST["Correo"]) && isset($_POST["Password"])){
            $usuario = buscarUsuario();
            loguearUsuario($usuario);
        } 
    }
?>