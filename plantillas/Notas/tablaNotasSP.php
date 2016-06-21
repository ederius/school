<?php
session_start();
include '../../php/class/Materia.class.php';
include '../../php/class/Profesor.class.php';

$variable=$_POST["grado"];
$_SESSION['grado']=$variable;
$m= new Materia();
$r=$m->consultarMateriasXCurso($variable);
$p=new Profesor();
$pro=$p->consultarProfesorporid($_SESSION['ididentidad']);


?>

<table>

    <thead>
    <tr>
        <th data-field="id" class="center"> Materia</th>
        <th data-field="name" class="center"> Nota</th>
        <th data-field="price" class="center"> Descripción</th>
    </tr>
    </thead>


    <tbody>
   <form class="NotasAlumno10" id="NotasAlumno10">
    <?php

        foreach($pro as $profesor){
        $materias=explode(',',$profesor['materias']);
        }
     for ($i=0; $i < count($materias) ; $i++) { 
                   
            echo'
                    <tr>
                        <td>'.$materias[$i].'</td>
                        <td><input type="text" name="nota'.utf8_encode($materias[$i]).'" id="nota'.utf8_encode($materias[$i]).'" class="center"></td>
                        <td><textarea name="descrip'.utf8_encode($materias[$i]).'" id="descrip'.utf8_encode($materias[$i]).'" cols="45" rows="40"></textarea></td>
                    </tr>
                 ';
                 }
?>
   </form>
    </tbody>


</table>

<a class="btn-floating btn-large waves-effect waves-light red right guardarNotasSP"><i class="mdi-content-add"></i></a>
