<?php
include'../class/Notas.class.php';
include'../class/Curso.class.php';

extract($_POST);
$c= new Curso();
$n=new Notas();

$idNota = $n->consultarUltimaNota();


$n->InsertarNotasxMaterias($idNota,$notaMatematicas,$descripMatematicas,$NotaEstadistica,$descripEstadistica,$notaGeografia,
    $descripGeografia,$notaGeometria,$descripGeometria,$notaHistoria,$descripHistoria,
    $notaEspanol,$descripEspanol,$notaIngles,$descripIngles,$notaInformatica,
    $descripInformatica,$notaArte,$descripArte,$notaUrbanidad,$descripUrbanidad,
    $notaDeportes,$descripDeportes,$notaEtica,$descripEtica,$notaBiologia,$descripBiologia,
    $notaQuimica,$descripQuimica,$notaFisica,$descripFisica,$notaReligion,$descripReligion,
    $notaTrigonometria,$descripTrigonometria,$notaCienciasPoliticas,$descripCienciasPoliticas,
    $notaEmprendimiento,$descripEmprendimiento,$notaDemocracia,$descripDemocracia,
    $notaAlgebra,$descripAlgebra,$notaNaturales,$descripNaturales);


?>