<?php
    include_once 'usuarioDAO.php';
    session_start();
?>

 

<div class="tab-pane fade in show active" id="Perfil" role="tabpanel">
    <img class = "img-thumbnail float-left my-2" src="/img/foto/idUsuario.jpg">
    <div class = "float-left">
        <h6>Nombre: <?=$_SESSION["Usuario"]["Nombre"]?></h6>
        <h6>Apellido: <?=$_SESSION["Usuario"]["Apellido"]?></h6>
        <h6>Provincia: <?=$_SESSION["Usuario"]["Provincia"]?></h6>
        <h6>Localidad: <?=$_SESSION["Usuario"]["Localidad"]?></h6>
        <h6>Correo: <?=$_SESSION["Usuario"]["Correo"]?></h6>
    </div>
</div>



