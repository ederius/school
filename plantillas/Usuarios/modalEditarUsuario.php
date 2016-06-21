<?php
include '../../php/class/Usuario.class.php';
extract($_POST);
$c=new Usuario();

$r=$c->consultarUsuariosporid($id);
foreach($r as $dato){}
?>
<div class="row">

    <form class="col s12 card" name="editarAlumno" id="editarAlumno">
        <div class="row card-content">

            <div class="input-field col s12">
                <i class="mdi-action-account-circle prefix active"></i>
                <input value="<?php echo $dato['usuario'] ;?>" name="usuario" id="usuario" type="text" class="validate">
                <label class="active" for="usuario">Usuario</label>
            </div>

            <div class="input-field col s12">
                <i class="mdi-hardware-security prefix active"></i>
                <input value="<?php echo $dato['contrasena'] ;?>" name="contrasena" id="contrasena" type="password" class="validate">
                <label class="active" for="contrasena">Contraseña</label>
            </div>

            <div class="error center center-align"></div>
        </div>

    </form>

</div>
<div class="errorEditarAlumno  center center-align"></div>

<script>
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
</script>