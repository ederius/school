<?php

include'../class/Notas.class.php';
extract($_POST);
$n=new Notas();

$n->verificarRegistroNotas($idalumno,$periodo);


?>