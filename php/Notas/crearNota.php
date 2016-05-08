<?php

include'../class/Notas.class.php';
include'../class/Curso.class.php';

extract($_POST);
$c= new Curso();
$n=new Notas();

$idcurso=$c->consultarCursoporNombre($nombreCurso);

$n->InsertarNota($idAlumno,$idcurso,$periodo);


?>