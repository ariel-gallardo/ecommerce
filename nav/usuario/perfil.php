<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $campos = [
        "Nombre",
        "Apellido",
        "Provincia",
        "Localidad",
        "Calle",
        "Correo"
    ];
?> 
<div class="tab-pane fade in show active" id="Perfil" role="tabpanel">
    <img class = "img-thumbnail my-2" src="/img/foto/idUsuario.jpg">
    <form class = "my-2 mx-2" action="." method = "POST"> 
    <?php foreach($campos as $campo) : ?>
        <div class="form-group">
            <label for="<?=$campo?>"><b><?=$campo?></b></label>
            <input class = "form-control" name = "<?=$campo?>" type = "<?=$campo !== "Correo" ? 'text' : 'email' ?>" placeholder = "<?=$campo?>" value = "<?=$_SESSION["Usuario"][$campo]?>" <?=$campo === "Correo" ? 'disabled' : '' ?>>
        </div>
    <?php endforeach; ?>        
        <div>
            <button class = "btn btnFormulario float-left" name = "modificarPerfil">Modificar</button>
            <button class = "btn btnFormulario float-right" name = "salirPerfil">Cerrar Sesión</button>
        </div>    
    </form>
</div>



