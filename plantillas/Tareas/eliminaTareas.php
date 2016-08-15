<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c= new Curso();
$a = new Alumno();
?>

<h4>Buscar Tareas</h4>

<div class="row">
    <div class="col s12">
        <div class="card">

                <div class="col s3">
                    <input type="text" class="datepicker fechaInicio" placeholder="Fecha de inicio"/>
                </div>

            <div class="col s3">
                <input type="text" class="datepicker fechaTope" placeholder="Fecha de Tope"/>
            </div>
            <div class="col s3">
                <a class="btn waves-effect waves-light white-text buscarTareasProfe"><i class="mdi-action-find-replace"></i> Buscar</a>
            </div>

                <div class="col s12 tablaTareas center-align">
                 </div>

        </div>

    </div>
</div>


<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4><i class="small mdi-action-delete"></i> Eliminar Tarea</h4>
    <p>Esta seguro que quiere eliminar la tarea seleccionada?</p>
  </div>
  <br>
  <br>
  <hr>
  <div class="modal-footer">
    <a class="btn modal-close waves-effect waves-green right">No</a>
    <a  class="btn eliminarT waves-effect waves-green right">S&iacute;</a>

  </div>
</div>




<script>
    $(function() {
        $('.datepicker').pickadate({
            format: 'yyyy/mm/dd'
        });



    });
</script>
