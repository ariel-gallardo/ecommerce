<!-- Formulario de Registro -->
<div class="tab-pane fade in show" id="Registro" role="tabpanel">
    <form action="" method="POST">
        <input class="form-control my-2" type="text" placeholder="Nombre/s" required>
        <input class="form-control my-2" type="text" placeholder="Apellido/s" required>
        <!-- Provincias ordenadas por codigo -->
        <select class="form-control my-2" name="Provincia" placeholder="Provincia" required>
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
        <input class="form-control my-2" type="text" name="Calle" placeholder="Calle" required>
        <input class="form-control my-2" type="email" name="Correo" placeholder="Correo Electrónico" required>
        <input class="form-control my-2" type="password" name="Password" placeholder="Contraseña" required>
        <input class="form-control my-2" type="password" name="Password_Verify" placeholder="Repetir Contraseña"
            required>
        <div class="float-left my-2">
            <span><b>Foto de Perfil</b></span>
            <input type="file" accept="image/*">
        </div>
        <button class="btn btnFormulario mx-1" type="submit">Registrarse</button>
        <button class="btn btnFormulario mx-1" type="reset">Vaciar</button>
    </form>
</div>