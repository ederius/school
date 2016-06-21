<?php
session_start();
include '../../php/class/Materia.class.php';
include '../../php/class/Notas.class.php';
extract($_POST);
$_SESSION['grado']=$grado;
$m= new Materia();
$r=$m->consultarMateriasXCurso($grado);

$n= new Notas();
$notas=$n->consultarNotas($idalumno,$periodo);
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
    <form class="actualizarNotasPP" id="actualizarNotasPP">
        <?php

        $vector= array();

        foreach($r as $re){
            echo'
    <tr>
        <td>'.utf8_encode($re["nombreMateria"]).'</td>
        <td><input value="'.$notas["nota".$re["nombreMateria"]].'" type="text" name="nota'.utf8_encode($re["nombreMateria"]).'" id="nota'.utf8_encode($re["nombreMateria"]).'" class="center"></td>
        <td><textarea  name="descrip'.utf8_encode($re["nombreMateria"]).'" id="descrip'.utf8_encode($re["nombreMateria"]).'" cols="45" rows="40">'.$notas["descripcion".$re["nombreMateria"]].'</textarea></td>
    </tr>
    ';
        }


        ?>
    </form>
    </tbody>


</table>

<a class="btn-floating btn-large waves-effect waves-light red right actualizarNotasPP"><i class="mdi-content-add"></i></a>
