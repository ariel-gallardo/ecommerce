<!--Seccion de Barra de Navegación-->
<a class="navbar-brand m-0 p-0 nav-link" href="#">
    <h3>S.M.<img src="/img/nav/super.svg" width="40vw" alt="SuperMarket"></h3>
    <h6>Digital House</h6>
</a>
<ul class="list-inline">
    <li class="list-inline-item m-0">
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
                                <!-- Formulario de Usuario -->
                                <div class="tab-pane fade in show active" id="Login" role="tabpanel">
                                    <form action="" method="POST">
                                        <input class="form-control my-2" type="email" placeholder="Correo Electronico">
                                        <input class="form-control my-2" type="password" placeholder="Contraseña">
                                        <button class="btn btnFormulario mx-1" type="submit">Ingresar</button>
                                        <button class="btn btnFormulario mx-1" type="reset">Vaciar</button>
                                    </form>
                                </div>
                                <!-- Formulario de Registro -->
                                <div class="tab-pane fade in show" id="Registro" role="tabpanel">
                                    <form action="" method="POST">
                                        <input class="form-control my-2" type="text" placeholder="Nombre/s" required>
                                        <input class="form-control my-2" type="text" placeholder="Apellido/s" required>
                                        <!-- Provincias ordenadas por codigo -->
                                        <select class="form-control my-2" name="Provincia" placeholder="Provincia"
                                            required>
                                            <option value="NULL" selected disabled hidden>Provincia</option>
                                            <option value="BA">Buenos Aires</option>
                                            <option value="CA">Catamarca</option>
                                            <option value="CH">Chaco</option>
                                            <option value="CT">Chubut</option>
                                            <option value="CB">Córdoba</option>
                                            <option value="CR">Corrientes</option>
                                            <option value="ER">Entre Ríos</option>
                                            <option value="FO">Formosa</option>
                                            <option value="JY">Jujuy</option>
                                            <option value="LP">La Pampa</option>
                                            <option value="LR">La Rioja</option>
                                            <option value="MZ">Mendoza</option>
                                            <option value="MI">Misiones</option>
                                            <option value="NQ">Neuquén</option>
                                            <option value="RN">Río Negro</option>
                                            <option value="SA">Salta</option>
                                            <option value="SJ">San Juan</option>
                                            <option value="SL">San Luis</option>
                                            <option value="SC">Santa Cruz</option>
                                            <option value="SF">Santa Fe</option>
                                            <option value="SE">Santiago del Estero</option>
                                            <option value="TF">Tierra del Fuego</option>
                                            <option value="TU">Tucumán</option>
                                        </select>
                                        <select class="form-control my-2" name="Localidad">
                                            <option value="NULL" selected disabled hidden>Localidad</option>
                                        </select>
                                        <input class="form-control my-2" type="text" name="Calle" placeholder="Calle"
                                            required>
                                        <input class="form-control my-2" type="email" name="Correo"
                                            placeholder="Correo Electrónico" required>
                                        <input class="form-control my-2" type="password" name="Password"
                                            placeholder="Contraseña" required>
                                        <input class="form-control my-2" type="password" name="Password_Verify"
                                            placeholder="Repetir Contraseña" required>
                                        <div class="float-left my-2">
                                            <span><b>Foto de Perfil</b></span>
                                            <input type="file" accept="image/*">
                                        </div>
                                        <button class="btn btnFormulario mx-1" type="submit">Registrarse</button>
                                        <button class="btn btnFormulario mx-1" type="reset">Vaciar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <!-- Boton del carro de compras -->
    <li class="list-inline-item position-relative btn btn-default btn-rounded m-0 p-0 pr-4">
        <div class="text-center" data-toggle="modal" data-target="#Carro">
            <img src="/img/nav/carro.svg" alt="Carro" width="35vw">
            <span class="badge badge-primary position-absolute mt-4">20</span>
        </div>
        <div class="modal fade" id="Carro">
            <div class="modal-dialog">
            <!-- Ventana del carro de compras -->
                <div class="modal-content text-center">
                    <div class="modal-title">
                        <h4 class="my-3">Carro de Compras</h4>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group p-0">
                            <!-- Elementos del carro de compras -->
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x3</span>Auriculares Inalambr.<span
                                        class="p-0 badge mx-1">600$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x2</span>Auriculares Cableados<span
                                        class="p-0 badge mx-1">200$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x3</span>Perfume Savage Dior<span
                                        class="p-0 badge mx-1">200$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x4</span>Perfume Channel<span
                                        class="p-0 badge mx-1">100$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x5</span>Perfume Biografia<span
                                        class="p-0 badge mx-1">25$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x3</span>Destornillador Philip<span
                                        class="p-0 badge mx-1">200$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                            <li class="list-group-item border-0 text-left py-0">
                                <p><span class="mx-2 badge badge-secondary p-0">x3</span>Destornillador Plano<span
                                        class="p-0 badge mx-1">200$ARS</span><svg class="Quitar mx-1"
                                        xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                        <path
                                            d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
                                    </svg></span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <svg class="Pagar" width="5vw" viewBox="0 0 480 480.00029" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m400 345.886719-20.375-12.207031c-6.210938-3.714844-13.316406-5.675782-20.554688-5.679688h-30.664062c-6.277344-.011719-12.527344.796875-18.597656 2.398438l-92.390625 24.800781c-10.101563 2.789062-18.214844 10.3125-21.753907 20.175781l-81.265624-43.964844c-6.589844-3.75-14.304688-5.023437-21.75-3.59375-2.808594.496094-5.53125 1.390625-8.089844 2.65625-5.777344 2.765625-10.570313 7.234375-13.742188 12.800782-2.773437 4.847656-4.230468 10.335937-4.230468 15.917968-.085938 11.398438 5.953124 21.960938 15.8125 27.671875l145.648437 87.144531c6.328125 3.917969 13.617187 5.992188 21.058594 5.992188h112.71875c5.035156.003906 10.023437-.949219 14.703125-2.800781l23.472656-9.269531v12.070312h80v-160h-80zm-29.351562 116.433593c-2.800782 1.105469-5.789063 1.675782-8.800782 1.679688h-112.742187c-4.507813-.003906-8.925781-1.273438-12.746094-3.664062l-145.847656-87.246094c-4.957031-2.863282-7.992188-8.167969-7.953125-13.890625.011718-2.804688.75-5.5625 2.144531-8 1.59375-2.761719 3.992187-4.976563 6.871094-6.34375 1.269531-.617188 2.613281-1.054688 4-1.296875 1.011719-.1875 2.039062-.285156 3.066406-.285156 2.75-.007813 5.453125.710937 7.839844 2.078124l88.121093 47.617188c.101563.488281.101563.96875.230469 1.457031 3.789063 13.964844 16.457031 23.664063 30.929688 23.679688 4.453125-.40625 8.863281-1.195313 13.183593-2.351563l83.117188-22.242187-4.125-15.457031-82.847656 22.144531c-3.648438.839843-8.355469 1.800781-9.328125 1.882812-7.226563.011719-13.5625-4.816406-15.464844-11.785156-.257813-.96875-.410156-1.960937-.464844-2.960937 0 0-.0625-1.9375 0-2.617188.609375-6.691406 5.296875-12.308594 11.769531-14.109375l92.351563-24.707031c4.714844-1.261719 9.574219-1.902344 14.453125-1.902344h30.664062c4.34375 0 8.605469 1.179688 12.328126 3.410156l28.601562 17.125v86.183594zm45.351562-126.320312h48v128h-48zm0 0" />
                            <path
                                d="m329.953125 64-42.914063-42.910156c-13.472656-13.550782-31.804687-21.1445315-50.910156-21.089844h-100.578125c-6.207031.0078125-12.328125 1.457031-17.886719 4.222656l-17.929687 8.96875c-3.59375 1.808594-7.585937 2.671875-11.605469 2.511719l-8.128906-.285156v-15.417969h-80v176h80v-24h13.601562l4.839844 3.199219c13.542969 8.992187 29.3125 14.070312 45.558594 14.664062v102.136719h336v-208zm-265.953125 96h-48v-144h48zm43.296875-18.113281-8.898437-5.886719h-18.398438v-104.574219l7.542969.269531c6.699219.238282 13.347656-1.203124 19.34375-4.191406l17.914062-8.96875c3.335938-1.667968 7.019531-2.535156 10.75-2.535156h100.578125c14.859375-.042969 29.121094 5.863281 39.597656 16.398438l31.601563 31.601562h-66.015625l-19.417969-19.414062-11.308593 11.308593 56.511718 56.515625c6.277344 6.25 6.296875 16.40625.046875 22.6875-6.253906 6.277344-16.410156 6.296875-22.6875.046875l-47.199219-47.199219-5.601562 4.800782c-15.464844 13.132812-38.070312 13.46875-53.921875.796875l-4.636719-3.757813-10.082031 12.429688 4.6875 3.800781c4.902344 3.917969 10.40625 7.019531 16.296875 9.183594v38.65625c-13.09375-.582031-25.785156-4.71875-36.703125-11.96875zm113.800781-7.488281 12.070313 12.074218c12.53125 12.34375 32.648437 12.363282 45.199219.039063-11.742188 18.183593-7.109376 42.382812 10.519531 54.941406 17.628906 12.558594 42.015625 9.03125 55.363281-8.003906 13.347656-17.039063 10.9375-41.5625-5.476562-55.671875-16.410157-14.109375-41.019532-12.816406-55.859376 2.933594 5.464844-8.582032 6.441407-19.277344 2.621094-28.710938h107.128906c3.441407 20.128906 19.207032 35.894531 39.335938 39.335938v33.328124c-20.128906 3.441407-35.894531 19.207032-39.335938 39.335938h-161.328124c-3.441407-20.128906-19.207032-35.894531-39.335938-39.335938v-33.328124c11.433594-1.925782 21.773438-7.945313 29.097656-16.9375zm66.902344 33.601562c0-13.253906 10.746094-24 24-24s24 10.746094 24 24-10.746094 24-24 24-24-10.746094-24-24zm176 88h-304v-137.449219c12.683594.953125 25.328125-2.28125 36-9.199219l13.648438 13.648438c-6.003907 8.15625-15.519532 12.980469-25.648438 13h-8v64h8c17.671875 0 32 14.328125 32 32v8h192v-8c0-17.671875 14.328125-32 32-32h8v-64h-8c-17.671875 0-32-14.328125-32-32v-8h-134.6875l-16-16h206.6875zm0 0" />
                            </svg>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="list-inline-item position-relative btn btn-default btn-rounded m-0 p-0 pr-3">
        <div class="text-center" data-toggle="modal" data-target="#Notificacion">
            <img src="/img/nav/notificacion.svg" alt="Notificacion" width="35vw">
            <span class="badge badge-primary position-absolute mt-4">20</span>
        </div>
        <div class="modal fade" id="Notificacion">
            <div class="modal-dialog">
                <div class="modal-content text-center">
                    <div class="modal-title">
                        <h4 class="my-3">Notificaciones</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
<!-- Boton Menu Acortable -->
<button class="navbar-toggler border-0 margin-0 p-1" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!-- Lista Menu Acortable -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav text-center pl-md-1 mr-auto ml-lg-5 ml-md-2">
        <!-- Acceso directo a seccion principal -->
        <li class="nav-item">
            <a class="letraLista nav-link m-md-0 p-md-1" href=".">Home</a>
        </li>
        <!-- Ventana a seccion de preguntas frecuentes -->
        <li class="nav-item">
            <a class="letraLista nav-link m-md-0 p-md-1" data-toggle="modal" data-target="#FAQ">F.A.Q.</a>
        </li>
        <!-- Ventana con un formulario para comunicarse con el dueño -->
        <li class="nav-item">
            <a class="letraLista nav-link m-md-0 p-md-1" data-toggle="modal" data-target="#Contacto">Contacto</a>
            <div class="modal fade" id="Contacto">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-title">
                            <h4 class="my-2">Consultas</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <textarea class="form-control my-2" rows="5">

                                        </textarea>
                                <button class="btn btnFormulario mx-1 my-2" type="reset">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- Buscador -->
<?php include_once 'nav/buscador.php' ?>