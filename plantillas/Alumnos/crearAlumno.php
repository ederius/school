<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c=new Curso();
$a=new Alumno();
?>
<div class="row">
    <h5> Nuevo estudiante</h5>
    <form class="col s12 card" name="crearAlumno" id="crearAlumno">
        <div class="row card-content">

         <div class="input-field col s6 left">
                <i class="mdi-action-account-circle prefix"></i>
                <input name="nombre" id="nombre" type="text" class="validate">
                <label for="nombre">Nombre Completo</label>
            </div>
        
            <div class="input-field col s6">
                <i class="mdi-action-payment prefix"></i>
                <input name="tarjeta" id="tarjeta" type="text" class="validate">
                <label for="tarjeta">N&#176; de identificación</label>
            </div>


   
            <div class="input-field col s6">
                <i class="mdi-action-home prefix"></i>
                <input name="direccion" id="direccion" type="tel" class="validate">
                <label for="direccion">Dirección</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-stay-current-portrait prefix"></i>
                <input name="celular" id="celular" type="tel" class="validate">
                <label for="celular">Celular</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-phone prefix"></i>
                <input name="telefono" id="telefono" type="tel" class="validate">
                <label for="telefono">Telefono</label>
            </div>
            <div class="input-field col s6">
                <select name="sexo" id="sexo"  >
                    <option value="" >Sexo</option>
                      <option value="Masculino" >Masculino</option>
                        <option value="Femenino" >Femenino</option>
                   
                </select>
            </div>

            <div class="input-field col s12">
                <select name="idcurso" id="idcurso"  >
                    <option value="" >Seleccione el curso</option>
                    <?php
                    $curso=$c->consultarCursos();
                    foreach($curso as $cursos){
                      echo'  <option value="'.$cursos["idcurso"].'" >'.$cursos['nombreCurso'].'</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="input-field col s12">
                <select name="idjornada" id="idjornada"  >
                    <option value="" >Seleccione la jornada</option>
                    <?php
                    $curso=$a->Jornadas();
                    foreach($curso as $cursos){
                        echo'  <option value="'.$cursos["idjornada"].'" >'.utf8_encode($cursos['nombreJornada']).'</option>';
                    }
                    ?>
                </select>
            </div><br><br>
            <div class="error center center-align"></div>
        </div>
        <a class="waves-effect waves-light btn right crearAlumno"><i class="mdi-social-person-add center white-text"></i></a>
    </form>
</div>



<script>    $('select').material_select();
</script>