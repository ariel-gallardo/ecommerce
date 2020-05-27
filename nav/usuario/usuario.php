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
                            </ul>
                            <div class="tab-content">
                                <!-- Formulario de Login -->
                                    <?php include_once 'login.php' ?>
                                <!-- Formulario de Registro -->
                                    <?php include_once 'registro.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>