<?php
    include_once 'usuarioDAO.php';

    $campos = [
        "Perfil" => true,
        "Login" => false,
        "Registro" =>false
    ];

?>
<!-- Seccion del Usuario -->
<div class="text-center" data-toggle="modal" data-target="#Usuario">
    <img src="/img/nav/usuario.svg" alt="Perfil" width="35vw">
</div>
<div class="modal fade" id="Usuario">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-title">
                <h4 class="my-3">Cliente</h4>
            </div>
        <div class="modal-body">
            <div class="modal-c-tabs">
                <ul class="nav nav-tabs md-tabs tabs-2" role="tablist">
                    <?php foreach($campos as $campo => $logueado): ?>
                        <?php if((isset($_SESSION["Usuario"]) && $logueado) || (!isset($_SESSION["Usuario"]) && !$logueado)) :?>
                        <li class="nav-item">
                            <a class="nav-link text-center" data-toggle="tab" role="tab" href="#<?=$campo?>">
                                <?=$campo?>
                            </a>
                        </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                </ul>
            <div class="tab-content">  

            <?php foreach($campos as $campo => $logueado): ?>
                <?php if((isset($_SESSION["Usuario"]) && $logueado) || (!isset($_SESSION["Usuario"]) && !$logueado)) :?>
                    <?php include $campo.'.php' ?>
                <?php endif;?>
            <?php endforeach; ?>
        </div>
    </div>
</div>