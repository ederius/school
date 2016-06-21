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
                                <select id="cursosAlumnos" >
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
                                <div class="col s3">
                                     <input placeholder="Buscar" type="text" name="busquedaAlumno2" id="busquedaAlumno2">
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
                                    <select id="cursosAlumnosSP" >
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
                                    <select id="jornadaSP" >
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
                                    <input placeholder="Buscar" type="text" name="busquedaAlumno2SP" id="busquedaAlumno2SP">
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
                                    <select id="cursosAlumnosTP" >
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
                                    <select id="jornadaTP" >
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
                                    <input placeholder="Buscar" type="text" name="busquedaAlumno2TP" id="busquedaAlumno2TP">
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
                                    <select id="cursosAlumnosCP" >
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
                                    <select id="jornadaCP" >
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
                                    <input placeholder="Buscar" type="text" name="busquedaAlumno2CP" id="busquedaAlumno2CP">
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
