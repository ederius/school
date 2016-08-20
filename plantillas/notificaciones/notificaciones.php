<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c= new Curso();
$a = new Alumno();
?>

<h4>Notificaciones</h4>

<ul class="collapsible" data-collapsible="accordion">
    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Notificar acudientes por curso</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12">
                    <div class="card">

                        <div class="card-content row    ">
                            <div class="col s3"><label>ENVIAR POR:</label></div>
                            <div class="col s5">
                                <select id="mailCurso" >
                                    <option value="">Curso</option>
                                    <?php
                                    $cursos= $c->consultarCursos();
                                    foreach($cursos as $curso){
                                        echo '<option value="'.$curso["idcurso"].'">'.$curso["nombreCurso"].'</option>';
                                    }

                                    ?>

                                </select>

                            </div>
                            <div class="input-field col s6">
                                <input name="asuntoxcurso" id="asuntoxcurso" type="text" class="validate">
                                <label for="asuntoxcurso">Asunto</label>
                            </div>

                            <div class="input-field col s12 ">
                                <textarea id="mensajeAcudientexCurso" rows="4" cols="900"></textarea>
                                <label for="mensajeAcudientexCurso">Mensaje</label>

                            </div>
                            <div class="col s12 ">
                                <a class="mailporCurso btn waves-effect waves-light white-text right"><i class="mdi-content-mail large"></i></a>
                            </div>

                            <div class="resultadoMailporCurso col s12 center center-align"></div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
    </li>

    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Notificar acudientes por Jornada</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12">
                    <div class="card">

                        <div class="card-content row  alinear  ">
                            <div class="col s3"><label>ENVIAR POR:</label></div>

                            <div class="col s5 ">
                                <select id="jornada" >
                                    <option value="">Jornada</option>
                                    <?php
                                    $jornadas= $a->Jornadas();
                                    foreach($jornadas as $jornada){
                                        echo '<option value="'.$jornada["idjornada"].'">'.utf8_encode($jornada["nombreJornada"]).'</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                                <div class="input-field col s6">
                                    <input name="asuntoxjornada" id="asuntoxjornada" type="text" class="validate">
                                    <label for="asuntoxjornada">Asunto</label>
                                </div>

                                <div class="input-field col s12 ">
                                    <textarea id="mensajeAcudientexJornada" rows="4" cols="900"></textarea>
                                    <label for="mensajeAcudientexJornada">Mensaje</label>

                                </div>



                            <div class="col s12 ">
                                <a class=" right mailJornada btn waves-effect waves-light white-text center-align center"><i class="mdi-content-mail large"></i></a>
                            </div>

                            <div class="resultadoMailporJornada col s12 center center-align" ></div>

                        </div>

                    </div>
                </div>

            </div>



        </div>
    </li>

    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Notificar a todos</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12 center-align center">
                    <div class="card center-align center">

                        <div class="card-content row    ">

                            <div class="input-field col s6">
                                <input name="asuntoxtodos" id="asuntoxtodos" type="text" class="validate">
                                <label for="asuntoxtodos">Asunto</label>
                            </div>

                            <div class="input-field col s12 ">
                                <textarea id="mensajeAcudientextodos" rows="4" cols="900"></textarea>
                                <label for="mensajeAcudientextodos">Mensaje</label>

                            </div>

                            <div class="col s3 offset-s4 center-align center ">
                                <a class=" buttonmailxtodos btn-large waves-effect waves-light white-text center-align center"><i class="mdi-content-mail large"></i></a> </div>

                            <div class="resultadoxtodos col s12"></div>

                        </div>

                    </div>
                </div>

            </div>



        </div>
    </li>


<!-- Modal estructura -->
<div id="modalboletines" class="modal">

    <div class="tablaboletines">

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
