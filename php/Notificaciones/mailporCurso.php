<?php
include'../class/Mail.class.php';
extract($_POST);
$m= new Mail();
$m->mailxcurso($idCurso,$asuntoxcurso,$mensajeAcudientexCurso);