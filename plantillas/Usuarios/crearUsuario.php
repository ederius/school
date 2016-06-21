
<div class="row">
    <h5> Nuevo Usuario</h5>
    <form class="col s12 card" name="crearUsuario" id="crearUsuario">
        <div class="row card-content">

            <div class="input-field col s12">
                <select name="tipo" id="tipo"  >
                    <option value="" >Seleccione tipo de usuario</option>
                    <option value="1">Estudiante</option>
                    <option value="2">Acudiente</option>
                    <option value="3">Profesor</option>
                </select>

            </div>



            <div class="input-field col s12 seleccionUsuario">
                <select name="ididentificacion" id="ididentificacion"  >
                    <option value="" >Seleccione usuario</option>

                </select>

            </div>


            <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix"></i>
                <input name="usuario" id="usuario" type="text" class="validate">
                <label for="usuario">Usuario</label>
            </div>

            <div class="input-field col s6">
                <i class="mdi-hardware-security prefix"></i>
                <input name="contrasena" id="contrasena" type="password" class="validate">
                <label for="contrasena">Contraseña</label>
            </div>



            <div class="error center center-align"></div>
        </div>
        <a class="waves-effect waves-light btn right crearUsuario"><i class="mdi-social-person-add center white-text"></i></a>
    </form>

</div>

<script>

        $('select').material_select();
        $('.tooltipped').tooltip({delay: 50});



</script>