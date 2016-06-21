<?php
include '../class/Profesor.class.php';
extract($_POST);
$a=new Profesor();
$a->actualizarProfesor($idprofesor,$nombre,$direccion,$celular,$telefono,$datos);

?>