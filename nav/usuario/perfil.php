<div class="tab-pane fade in show active" id="Perfil" role="tabpanel">
    <form action="" method="POST">
        <fieldset disabled>
            <input class = "form-control my-2" type = "text" name = "Nombre"  placeholder = "Nombre/s" required value = "">
            <input class = "form-control my-2" type = "text" name = "Apellido"  placeholder = "Apellido/s" required value = "">
            <input class = "form-control my-2" type = "text" name = "Provincia"  placeholder = "Provincia" required value = "">
            <input class = "form-control my-2" type = "text" name = "Localidad"  placeholder = "Localidad" required value = "">
            <input class = "form-control my-2" type = "text" name = "Calle" placeholder = "Calle" required value = "">
            <input class = "form-control my-2" type = "email" name = "Correo" placeholder = "Correo Electrónico" required value = "<?=$_COOKIE["Correo"]?>">
            <input class = "form-control my-2" type = "password" name = "Password" placeholder = "Contraseña" required value = "<?=$_COOKIE["Password"]?>">
            <input class = "form-control my-2" type = "password" name = "Password_Verify" placeholder = "Repetir Contraseña"
            required value = "">
        </fieldset>
    </form>
</div>