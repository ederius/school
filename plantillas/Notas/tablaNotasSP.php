<?php
session_start();
include '../../php/class/Materia.class.php';
$variable=$_POST["grado"];
$_SESSION['grado']=$variable;
$m= new Materia();
$r=$m->consultarMateriasXCurso($variable);
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

    $vector= array();

    foreach($r as $re){
echo'
    <tr>
        <td>'.utf8_encode($re["nombreMateria"]).'</td>
        <td><input type="text" name="nota'.utf8_encode($re["nombreMateria"]).'" id="nota'.utf8_encode($re["nombreMateria"]).'" class="center"></td>
        <td><textarea name="descrip'.utf8_encode($re["nombreMateria"]).'" id="descrip'.utf8_encode($re["nombreMateria"]).'" cols="45" rows="40"></textarea></td>
    </tr>
    ';
    }


?>
   </form>
    </tbody>


</table>

<a class="btn-floating btn-large waves-effect waves-light red right guardarNotasSP"><i class="mdi-content-add"></i></a>
