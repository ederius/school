<?php
include '../class/Profesor.class.php';
extract($_POST);
$i= new Profesor();


$i->crearProfesor($nombre,$direccion,$celular,$telefono,$datos);


?>