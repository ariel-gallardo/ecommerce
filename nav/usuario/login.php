<!-- Formulario de Usuario -->
<div class="tab-pane fade in show active" id="Login" role="tabpanel">
    <form action="." method="POST">
        <input class="form-control my-2" name="Correo" type="email" placeholder="Correo Electronico" required>
        <input class="form-control my-2" name="Password" type="password" placeholder="Contraseña" required>
        <div class="form-check my-2">
            <input type="checkbox" class="form-check-input" name = "cookies" id="cookies">
            <label class="form-check-label" for="cookies">¿Inicio de sesion automatico?</label>
        </div>
        <button class="btn btnFormulario mx-1" type = "submit" name = "Loguear" value = "Loguear">Ingresar</button>
        <button class="btn btnFormulario mx-1" type = "reset">Vaciar</button>
    </form>
</div>