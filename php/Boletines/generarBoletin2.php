<?php
session_start();
error_reporting(E_ALL);
header("Content-Type: text/html;charset=utf-8");
extract($_REQUEST);
require_once("../lib/dompdf/dompdf_config.inc.php");
include '../class/Notas.class.php';
include'../class/Alumno.class.php';
include'../class/Materia.class.php';
include'../class/Curso.class.php';


$alumnos=new Alumno();
$alumno=$alumnos->consultarAlumnosporid($_SESSION["ididentidad"]);
foreach($alumno as $a){}

$nota=new Notas();
$notas=$nota->consultarNotas($_SESSION["ididentidad"], $periodo);

$materia=new Materia();
$materias=$materia->consultarMateriasXCurso1($a["idcurso"]);

$codigo = '


<html>
<head>
<title></title>
    <link href="../../css/style_boletin.css"  rel="stylesheet" type="text/css">

</head>
<body>

    <div class="container">

                <table>
                <thead>
                    <tr >
                        <td>
                            <img src="../../imagenes/escudo.png" width="140">
                        </td>
                        <td width="430">
                            <strong><h2 class="centrado">Instituci&oacute;n Educativa Chon Kay</h2></strong>
                        </td >

                    </tr>
                    </thead>

                </table>
                    <br><br>
                <table>
                        <tr>
                            <td width="270"><strong>Estudiante:</strong>  ' . $a["nombreAlumno"] . ' </td>
                            <td width="130"><strong>Codigo: </strong> ' . $a["idalumno"] . '  </td>
                            <td width="130"><strong>A&ntilde;o lectivo: 2016</strong>   </td>

                        </tr>
                </table>
                <table>
                      <tr>
                            <td width="165"><strong>Grado:</strong>  ' . $a["gradoCurso"] . ' &#176;</td>
                            <td width="120"><strong>Grupo: </strong>  ' . $a["nombreCurso"] . ' </td>
                            <td width="120"><strong>Jornada: </strong>  ' . $a["nombreJornada"] . ' </td>
                            <td width="120"><strong>Periodo: </strong> ' . $periodo . '  </td>

                        </tr>

                </table>
               <table>
                      <tr>
                            <td width="285"><strong>Nivel: </strong>Bachillerato   </td>
                            <td width="249"><strong>Modalidad: </strong>No aplica  </td>

                        </tr>

                </table>
                <br>
                <table>
                      <tr>
                            <td width="485" class="centrado"><strong>Asignaturas/Materias</strong>   </td>
                            <td width="49" class="centrado"><strong>Nota </strong> </td>

                        </tr>
';
$codigo3="";
foreach($materias as $m) {
    $codigo2= '
                                                    <tr>
                                                   <td width = "485" ><strong >'.$m["nombreMateria"].'</strong ><br>
                                                    <p class="centrado" >'.utf8_decode($notas["descripcion".$m["nombreMateria"]]).'</p>
                                                    </td >
                                                   <td width="49" class="centrado"><strong> '.$notas["nota".$m["nombreMateria"]].' </strong></td>
                                                    </tr >

                                        ';
    $codigo3=$codigo3.$codigo2;
}


$codigo4='
                </table>
    </div>
</body>
</html>


';


$cuerpo = $codigo.$codigo3.$codigo4;

$dompdf = new DOMPDF();

$dompdf->load_html($cuerpo);


$dompdf->render();

$dompdf->stream("Boletin de ".$a["nombreAlumno"]." periodo ".$periodo. ".pdf");

