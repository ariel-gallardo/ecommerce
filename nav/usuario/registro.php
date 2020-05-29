<!-- Formulario de Registro -->
<div class="tab-pane fade in show" id="Registro" role="tabpanel">
    <form action="." method="POST" enctype = "multipart/form-data">
        <input class = "form-control my-2" type = "text" name = "Nombre"  placeholder = "Nombre/s" required>
        <input class = "form-control my-2" type = "text" name = "Apellido"  placeholder = "Apellido/s" required>
        <!-- Provincias ordenadas por codigo -->
        <input class = "form-control my-2" name = "Provincia" placeholder = "Provincia" required>
        <input class = "form-control my-2" name = "Localidad" placeholder = "Localidad" required>
        <input class = "form-control my-2" type = "text" name = "Calle" placeholder = "Calle" required>
        <input class = "form-control my-2" type = "email" name = "Correo" placeholder = "Correo Electrónico" required>
        <input class = "form-control my-2" type = "password" name = "Password" placeholder = "Contraseña" required>
        <input class = "form-control my-2" type = "password" name = "Password_Verify" placeholder = "Repetir Contraseña"
            required>
        <div class = "my-2">
            <span><b>Foto de Perfil</b></span>
            <input class = "border-0" type = "file" name = "Foto" accept = "image/*" required>
        </div>
        <div class="form-check my-2">
            <input type="checkbox" class="form-check-input" name = "cookies" id="cookies">
            <label class="form-check-label" for="cookies">¿Recordarme?</label>
        </div>
        <button class = "btn btnFormulario mx-1" type = "submit" name = "Registrar">Registrarse</button>
        <button class = "btn btnFormulario mx-1" type = "reset">Vaciar</button>
    </form>
</div>