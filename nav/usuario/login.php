<?php
    include_once 'usuarioDAO.php'
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
        if(isset($_POST["Correo"]) && isset($_POST["Password"]) && !isset($_POST["Verify_Password"])){
            $_SESSION["Usuario"] = buscarUsuario();
            if(loguearUsuario($_SESSION["Usuario"])){
                echo "<script>alert('Bienvenido ".$_SESSION["Usuario"]["Nombre"]."')</script>";
            }else{
                echo "<script>alert('No se encuentran sus datos.')</script>";
            }
        } 
    }
?>