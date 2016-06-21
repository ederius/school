<?php
session_start();
extract($_POST);
include '../../php/class/Tareas.class.php';
include '../../php/class/Alumno.class.php';
$alumno=new Alumno();
$alumnos=$alumno->consultarAlumnosporid($_SESSION['ididentidad']);
foreach($alumnos as $a){}

$tarea=new Tareas();
$r=$tarea->consultarTareasporidAlumno($fechaInicio,$fechaTope);

?>


<table>
    <thead>
    <tr>

        <th data-field="id">#</th>
        <th data-field="name">Curso</th>
        <th data-field="name">Materia</th>
        <th data-field="price">Titulo</th>
        <th data-field="price">Fecha de entrega</th>
    </tr>
    </thead>

    <tbody>
    <?php
    foreach($r as $t){
        echo '
                <tr>'.$a["nombreCurso"].'
                    <td>'.$t["idtareas"].'</td>
                    <td>'.$t['nombreCurso'].'</td>
                    <td>'.$t["nombreMateria"].'</td>
                    <td>'.$t["titulo"].'</td>
                    <td>'.$t["fecha"].'</td>
                    <td data-field="price blue"><a class="btnDescargarTarea" href="#/estudiante/tarea/descargar"><i class="mdi-action-assignment-returned small blue-text"></i></a></td>
                </tr>
            ';
    }
    ?>
    </tbody>
</table>


