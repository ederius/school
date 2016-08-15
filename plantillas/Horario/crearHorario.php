<?php
include '../../php/class/Curso.class.php';
$c= new Curso();
?>

<h5 class="center center-aligner">HORARIOS</h5>

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
                 <div id="contenido" class="col s12">

                 </div>

</div>
</form>


<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4><i class="small mdi-action-delete"></i> Eliminar horario</h4>
    <p>Esta seguro que quiere eliminar el horario seleccionado?</p>
  </div>
  <br>
  <br>
  <hr>
  <div class="modal-footer">
    <a class="btn modal-close waves-effect waves-green right">No</a>
    <a  class="btn eliminarH waves-effect waves-green right">S&iacute;</a>

  </div>
</div>




<div id="modal2" class="modal">
  <div class="modal-content">
    <h4><i class="small mdi-content-save"></i>Horario</h4>
    <p>El horario fue guardado con exito!!</p>
  </div>
  <br>
  <br>
  <hr>
  <div class="modal-footer">
    <a  class="btn listo waves-effect waves-green right">listo!</a>

  </div>
</div>



<script type="text/javascript" src="../js/Horario/crearHorario.js"></script>
