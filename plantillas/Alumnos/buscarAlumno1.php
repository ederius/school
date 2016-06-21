<?php
include '../../php/class/Alumno.class.php';
include '../../php/class/Curso.class.php';
$consulta= new Alumno();
$consulta1= new Curso();
$valor="1";
extract($_POST);

if($valor=="0"){
    $alumnos=$consulta->consultarAlumnos();
}
else{
    $alumnos=$consulta->buscarAlumnos($valor);
}
        foreach($alumnos as $a){
            $curso=$consulta1->consultarCurso($a['idcurso']);

            echo '<tr>
                    <td>'.$a["idalumno"].'</td>
                    <td>'.$a["nombreAlumno"].'</td>
                    <td>'.$a["direccionAlumno"].'</td>
                    <td>'.$a["celularAlumno"].'</td>
                    <td>'.$a["telefonoAlumno"].'</td>
                    <td>'.$curso.'</td>
                    <td><a class="editarAlumno teal-text" href="#/admin/alumno/buscar"><i class="mdi-content-create small "></i></a></td>
                    <td><a class="eliminarAlumno teal-text" href="#/admin/alumno/buscar"><i class="mdi-action-delete small"></i></a></td>

                </tr>';
        }
    ?>
