<?php
    if(!isset($_SESSION)){
        session_start();
    }
?> 
<div class="tab-pane fade in show active" id="Perfil" role="tabpanel">
    <img class = "img-thumbnail my-2" src="/img/foto/idUsuario.jpg">
    <form class = "my-2 mx-2" action="." method = "POST">
        <div class="form-group">
            <label for="Nombre"><b>Nombre</b></label>
            <input class = "form-control" name = "Nombre" type = "text" placeholder = "Nombre" value = "<?=$_SESSION["Usuario"]["Nombre"]?>">
        </div>    
        <div class="form-group">
            <label for="Apellido"><b>Apellido</b></label>
            <input class = "form-control" name = "Apellido" type = "text" placeholder = "Apellido" value = "<?=$_SESSION["Usuario"]["Apellido"]?>">
        </div>    
        <div class="form-group">
            <label for="Provincia"><b>Provincia</b></label>
            <input class = "form-control" name = "Provincia" type = "text" placeholder = "Provincia" value = "<?=$_SESSION["Usuario"]["Provincia"]?>">
        </div>    
        <div class="form-group">
            <label for="Localidad"><b>Localidad</b></label>
            <input class = "form-control" name = "Localidad" type = "text" placeholder = "Localidad" value = "<?=$_SESSION["Usuario"]["Localidad"]?>">
        </div>    
        <div class="form-group">
            <label for="Calle"><b>Calle</b></label>
            <input class = "form-control" name = "Calle" type = "text" placeholder = "Calle" value = "<?=$_SESSION["Usuario"]["Calle"]?>" >
        </div>    
        <div class="form-group">
            <label for="Correo"><b>Correo</b></label>
            <input class = "form-control" name = "Correo" type = "email" placeholder = "Correo" value = "<?=$_SESSION["Usuario"]["Correo"]?>" disabled>
        </div>
        <div>
            <button class = "btn btnFormulario float-left" name = "modificarPerfil">Modificar</button>
            <button class = "btn btnFormulario float-right" name = "salirPerfil">Cerrar Sesión</button>
        </div>    
    </form>
</div>



