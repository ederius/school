<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c= new Curso();
$a = new Alumno();
?>

<h4>Insertar Notas</h4>

<ul class="collapsible" data-collapsible="accordion">
    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Primer Periodo</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12">
                    <div class="card">

                        <div class="card-content row    ">
                            <div class="col s3"><label>BUSCAR POR:</label></div>
                            <div class="col s3">
                                <select id="AlumnosProfesor" >
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
                                <select id="jornadaProfesor" >
                                    <option value="">Jornada</option>
                                    <?php
                                    $jornadas= $a->Jornadas();
                                    foreach($jornadas as $jornada){
                                        echo '<option value="'.$jornada["idjornada"].'">'.utf8_encode($jornada["nombreJornada"]).'</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col s3">
                                <input placeholder="Buscar" type="text" name="busquedaAlumno2" id="busquedaAlumno2Profesor">
                            </div>

                            <div class="resultadoPrimerP col s12"></div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
    </li>

    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Segundo Periodo</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12">
                    <div class="card">

                        <div class="card-content row    ">
                            <div class="col s3"><label>BUSCAR POR:</label></div>
                            <div class="col s3">
                                <select id="AlumnosSPProfesor" >
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
                                <select id="jornadaSPProfesor" >
                                    <option value="">Jornada</option>
                                    <?php
                                    $jornadas= $a->Jornadas();
                                    foreach($jornadas as $jornada){
                                        echo '<option value="'.$jornada["idjornada"].'">'.utf8_encode($jornada["nombreJornada"]).'</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col s3">
                                <input placeholder="Buscar" type="text" name="busquedaAlumno2SPP" id="busquedaAlumno2SPProfesor">
                            </div>

                            <div class="resultadoSPP col s12"></div>

                        </div>

                    </div>
                </div>

            </div>



        </div>
    </li>

    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Tercer Periodo</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12">
                    <div class="card">

                        <div class="card-content row    ">
                            <div class="col s3"><label>BUSCAR POR:</label></div>
                            <div class="col s3">
                                <select id="AlumnosTPProfesor" >
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
                                <select id="jornadaTPProfesor" >
                                    <option value="">Jornada</option>
                                    <?php
                                    $jornadas= $a->Jornadas();
                                    foreach($jornadas as $jornada){
                                        echo '<option value="'.$jornada["idjornada"].'">'.utf8_encode($jornada["nombreJornada"]).'</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col s3">
                                <input placeholder="Buscar" type="text" name="busquedaAlumno2TP" id="busquedaAlumno2TPProfesor">
                            </div>

                            <div class="resultadoTPP col s12"></div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
    </li>

    <li>
        <div class="collapsible-header"><i class="mdi-action-event"></i>Cuarto Periodo</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="col s12">
                    <div class="card">

                        <div class="card-content row    ">
                            <div class="col s3"><label>BUSCAR POR:</label></div>
                            <div class="col s3">
                                <select id="AlumnosCPProfesor" >
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
                                <select id="jornadaCPProfesor" >
                                    <option value="">Jornada</option>
                                    <?php
                                    $jornadas= $a->Jornadas();
                                    foreach($jornadas as $jornada){
                                        echo '<option value="'.$jornada["idjornada"].'">'.utf8_encode($jornada["nombreJornada"]).'</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col s3">
                                <input placeholder="Buscar" type="text" name="busquedaAlumno2CP" id="busquedaAlumno2CPProfesor">
                            </div>

                            <div class="resultadoCPP col s12"></div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </li>
</ul>


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
