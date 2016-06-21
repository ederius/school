<?php
include '../class/Notas.class.php';

extract($_POST);
$n=new Notas();
$r= $n->InsertarNotas();

?>