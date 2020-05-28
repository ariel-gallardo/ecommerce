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
                    <?php if(isset($_SESSION["Usuario"])):?>
                    <!-- Tabs del Usuario -->
                    <!-- Perfil de Usuario -->
                    <li class="nav-item">
                        <a class="nav-link text-center" data-toggle="tab" role="tab" href="#Perfil">
                            Perfil
                        </a>
                    </li>
                    <?php else: ?>
                    <!-- Tabulacion de Usuario -->
                    <li class="nav-item">
                        <a class="nav-link text-center" data-toggle="tab" role="tab" href="#Login">
                            Login
                        </a>
                    </li>
                    <!-- Tabulacion de registro -->
                    <li class="nav-item">
                        <a class="nav-link text-center" data-toggle="tab" role="tab" href="#Registro">
                            Registro
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            <div class="tab-content">  
            <?php if(isset($_SESSION["Usuario"])): ?> 
            <!-- Perfil del Usuario -->
                <?php include "perfil.php" ?>
            <?php else: ?>
                <!-- Formulario de Login -->
                    <?php include 'login.php' ?>
                <!-- Formulario de Registro -->
                    <?php include 'registro.php' ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>