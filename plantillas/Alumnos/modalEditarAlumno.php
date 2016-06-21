<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
extract($_POST);
$c=new Curso();
$a=new Alumno();
$r=$a->consultarAlumnosporid($id);
foreach($r as $dato){}
?>
<div class="row">

    <form class="col s12 card" name="editarAlumno" id="editarAlumno">
        <div class="row card-content">
            <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix active"></i>
                <input name="nombre" id="nombre" type="text" value="<?php echo $dato['nombreAlumno'] ?>" class="validate">
                <label class="active" for="nombre">Nombre Completo</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-action-home prefix active"></i>
                <input name="direccion" id="direccion" type="tel" class="validate" value="<?php echo $dato['direccionAlumno'] ?>">
                <label class="active" for="direccion">Dirección</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-stay-current-portrait prefix active"></i>
                <input name="celular" id="celular" type="tel" class="validate" value="<?php echo $dato['celularAlumno'] ?>">
                <label class="active" for="celular">Celular</label>
            </div>
            <div class="input-field col s6">
                <i class="mdi-communication-phone prefix active"></i>
                <input name="telefono" id="telefono" type="tel" class="validate" value="<?php echo $dato['telefonoAlumno'] ?>">
                <label class="active" for="telefono">Telefono</label>
            </div>

            <div class="input-field col s12">
                <select name="idcurso" id="idcurso"  >

                    <?php
                    $curso=$c->consultarCursoporid($id);
                    foreach($curso as $cursos){
                        echo'  <option value="'.$cursos["idcurso"].'" >'.$cursos['nombreCurso'].'</option>';
                    }
                    $curso=$c->consultarCursos();
                    foreach($curso as $cursos){
                        echo'  <option value="'.$cursos["idcurso"].'" >'.$cursos['nombreCurso'].'</option>';
                    }
                    ?>
                </select>

            </div>


            <div class="input-field col s12">
                <select name="idjornada" id="idjornada"  >
                    <option value="<?php echo $dato['idjornada'] ?>" ><?php echo utf8_encode($dato['nombreJornada']) ?></option>
                    <?php
                    $curso=$a->Jornadas();
                    foreach($curso as $cursos){
                        echo'  <option value="'.$cursos["idjornada"].'" >'.utf8_encode($cursos['nombreJornada']).'</option>';
                    }
                    ?>
                </select>
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