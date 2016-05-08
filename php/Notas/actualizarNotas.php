<?php

include'../class/Notas.class.php';
extract($_POST);
$n=new Notas();

$n->actualizarNotasxMaterias($idalumno,$periodo,$notaMatematicas,$descripMatematicas,$notaEstadistica,$descripEstadistica,$notaGeografia,
    $descripGeografia,$notaGeometria,$descripGeometria,$notaHistoria,$descripHistoria,
    $notaEspanol,$descripEspanol,$notaIngles,$descripIngles,$notaInformatica,
    $descripInformatica,$notaArte,$descripArte,$notaUrbanidad,$descripUrbanidad,
    $notaDeportes,$descripDeportes,$notaEtica,$descripEtica,$notaBiologia,$descripBiologia,
    $notaQuimica,$descripQuimica,$notaFisica,$descripFisica,$notaReligion,$descripReligion,
    $notaTrigonometria,$descripTrigonometria,$notaCienciasPoliticas,$descripCienciasPoliticas,
    $notaEmprendimiento,$descripEmprendimiento,$notaDemocracia,$descripDemocracia,
    $notaAlgebra,$descripAlgebra,$notaNaturales,$descripNaturales);


?>