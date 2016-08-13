<?php
include '../../php/class/Curso.class.php';
$c= new Curso();
?>

<h5>CREAR HORARIO</h5>

<BR>
  <form>
<div id="row">

            <select id="horarioCursos" name="horarioCursos"class="select">
                <option value="">Curso</option>
                <?php
                $cursos= $c->consultarCursos();
                foreach($cursos as $curso){
                    echo '<option value="'.$curso["idcurso"].'">'.$curso["nombreCurso"].'</option>';
                }

                ?>
             </select>
                <br>

                <select id="jornadaHorario" name="jornadaHorario"class="select">
                    <option value="">Jornada</option>
                    <option value="1">Ma&ntilde;ana</option>
                    <option value="2">Tarde</option>

                 </select>
                 <div class="contenido">

                 </div>

</div>
</form>
<script>
$(document).ready(function() {
$('.select').material_select();
});
</script>
<script type="text/javascript" src="../js/Horario/crearHorario.js"></script>
