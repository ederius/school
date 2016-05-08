<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c= new Curso();
$a = new Alumno();
?>

<h4>Asignar Tarea</h4>

<div class="row">
    <div class="col s12">
        <div class="card">

            <div class="card-content row    ">
                <div class="col s1"><label>Asignar por:</label></div>
                <div class="col s3">
                    <select id="cursoTarea" >
                        <option value="">Curso</option>
                        <?php
                        $cursos= $c->consultarCursos();
                        foreach($cursos as $curso){
                            echo '<option value="'.$curso["idcurso"].'">'.$curso["nombreCurso"].'</option>';
                        }

                        ?>

                    </select>
                </div>
                <div class="col s3">
                    <select id="jornadaTarea" >
                        <option value="">Jornada</option>
                        <?php
                        $jornadas= $a->Jornadas();
                        foreach($jornadas as $jornada){
                            echo '<option value="'.$jornada["idjornada"].'">'.utf8_encode($jornada["nombreJornada"]).'</option>';
                        }

                        ?>
                        <option value="4">Todas</option>
                    </select>
                </div>

                <div class="col s2">
                    <input type="text" id="datepicker" placeholder="Fecha Inical"/>
                </div>
                <div class="col s2">
                    <input type="text" id="datepicker" placeholder="Fecha Tope"/>
                </div>


            <div class="col s12">
                <br>
                <a class="right btn waves-effect waves-light guardarTarea white-text" >Buscar</a>
            </div>


            <div class="resultadoTareas col s12 center center-align"></div>

        </div>

    </div>
</div>

</div>



<!-- Modal estructura -->
<div id="modalNotas" class="modal">

    <div class="tablaNotas">

    </div>
    <div class="action-bar">
        <div class="center center-align resultado-consulta-p1"> </div>
    </div>

</div>







<script>
    $('.collapsible').collapsible({
        accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    $('select').material_select();
</script>
<script>

    var editor, html = '';

    function createEditor() {

        editor = CKEDITOR.appendTo( 'editor' );
    }



</script>

<script>
    tinymce.init({
        selector: '#mytextarea',
        language : "es_MX"
    });

</script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>