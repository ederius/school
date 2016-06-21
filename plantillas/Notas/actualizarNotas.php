<?php
include '../../php/class/Curso.class.php';
include '../../php/class/Alumno.class.php';
$c= new Curso();
$a = new Alumno();
?>

<h4>Actualizar Notas</h4>

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
                                <select id="cursosAlumnosPP" >
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
                                <select id="jornadaPP" >
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
                                <input placeholder="Buscar" type="text" name="busquedaAlumnoPP" id="busquedaAlumnoPP">
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
                                <select id="cursosAlumnosSPA" >
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
                                <select id="jornadaSPA" >
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
                                <input placeholder="Buscar" type="text" name="busquedaAlumnoSP" id="busquedaAlumnoSPA">
                            </div>

                            <div class="resultadoSP col s12"></div>

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
                                <select id="cursosAlumnosTPA" >
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
                                <select id="jornadaTPA" >
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
                                <input placeholder="Buscar" type="text" name="busquedaAlumnoTP" id="busquedaAlumnoTPA">
                            </div>

                            <div class="resultadoTP col s12"></div>

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
                                <select id="cursosAlumnosCPA" >
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
                                <select id="jornadaCPA" >
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
                                <input placeholder="Buscar" type="text" name="busquedaAlumnoCP" id="busquedaAlumnoCPA">
                            </div>

                            <div class="resultadoCP col s12"></div>

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
