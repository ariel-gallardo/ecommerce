<?php
    $campos = [
        "Nombre",
        "Apellido",
        "Provincia",
        "Localidad",
        "Calle",
        "Correo",
        "Password",
        "Password_Verify"
    ];
?>

<!-- Formulario de Registro -->
<div class="tab-pane fade in show" id="Registro" role="tabpanel">
    <form action="." method="POST" enctype = "multipart/form-data">
        <?php foreach($campos as $campo) : ?>
            <input class = "form-control my-2" type = "<?= ($campo == 'Password' || $campo == 'Password_Verify' ? 'password' : ($campo == 'Correo' ? 'email' : 'text')) ?>" name = "<?=$campo?>"  placeholder = "<?= ($campo == 'Password' || $campo == 'Password_Verify' ? 'Contraseña' : ($campo == 'Correo' ? 'Correo electrónico' : $campo)) ?>" required>
        <?php endforeach; ?>
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