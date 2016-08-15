<?php
session_start();
extract($_POST);
include '../../php/class/Tareas.class.php';
include '../../php/class/Profesor.class.php';
$profesor=new Profesor();
$p=$profesor->consultarProfesorporid($_SESSION['ididentidad']);
foreach($p as $profe){}

$tarea=new Tareas();
$r=$tarea->consultarTareasporidProfesor($fechaInicio,$fechaTope,$profe["idprofesor"]);

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
                <tr>
                    <td>'.$t["idtareas"].'</td>
                    <td>'.$t['nombreCurso'].'</td>
                    <td>'.$t["nombreMateria"].'</td>
                    <td>'.$t["titulo"].'</td>
                    <td>'.$t["fecha"].'</td>
                    <td data-field="price blue"><a class="btnEliminarTarea" href="#/profesor/tarea/eliminar"><i class="mdi-action-delete small blue-text"></i></a></td>
                </tr>
            ';
    }
    ?>
    </tbody>
</table>
