<?php
include '../class/Profesor.class.php';
extract($_POST);
$i= new Profesor();


$i->crearProfesor($nombre,$direccion,$celular,$telefono,$Matematicas,$Estadistica,$Geografia,$Geometria,
        $Historia,$Espanol,$Ingles,$Informatica,$Arte,$Urbanidad,$Deportes,$Etica,$Biologia,$Quimica,
        $Fisica,$Religion,$Trigonometria,$CienciasPoliticas,$Emprendimiento,$Democracia,$Algebra,$Naturales);


?>