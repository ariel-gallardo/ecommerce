<?php
    include_once 'usuarioDAO.php';
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!-- Formulario de Usuario -->
<div class="tab-pane fade in show active" id="Login" role="tabpanel">
    <form action="." method="POST">
        <input class="form-control my-2" name="Correo" type="email" placeholder="Correo Electronico" required>
        <input class="form-control my-2" name="Password" type="password" placeholder="Contraseña" required>
        <button class="btn btnFormulario mx-1" type="submit">Ingresar</button>
        <button class="btn btnFormulario mx-1" type="reset">Vaciar</button>
    </form>
</div>

<?php
    if((isset($_POST["Correo"]) && isset($_POST["Password"])) || isset($_COOKIE["Correo"], $_COOKIE["Password"])){
        if(!isset($_SESSION["Usuario"])){ // No hay usuario ingresado en el sistema
            if(isset($_POST["Password_Verify"])){ //Quiere registrarse
                $usuario = crearUsuario();
                if(isset($usuario)){
                    almacenarUsuario($usuario);
                    echo
                    "<script>
                        alert('Bienvenido nuevo cliente: ".$usuario["Nombre"]."');
                        window.location.href = window.location.href;
                    </script>";
                }else{
                    echo
                        "<script>
                            alert('Ya existe la cuenta');
                            window.location.href = window.location.href;
                        </script>";
                }
            }else if(loguearUsuario(buscarUsuario())){ //Quiere loguearse.
                echo
                "<script>
                    alert('Bienvenido ".$_SESSION["Usuario"]["Nombre"]."');
                    window.location.href = window.location.href;
                </script>";

            }else{ //Quiere loguear pero no existe en el sistema.
                unset($_POST["Correo"]);
                unset($_POST["Password"]);
                echo
                "<script>
                    alert('No se encuentran sus datos.');
                    window.location.href = window.location.href;
                </script>";
            }
        }
    }
?>