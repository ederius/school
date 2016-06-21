<?php
include '../class/Alumno.class.php';
extract($_POST);
$a= new Alumno();

if($idcurso!= "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXcursoJornadaBusquedaP2($idcurso, $idjornada, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXcursoJornada2($idcurso, $idjornada, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXcursoBusquedaP2($idcurso, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda == "") {
    $a->buscarAlumnosXcursoP2($idcurso, $periodo);
}

if($idcurso== "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXBusquedaP2($busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXjornadaBusquedaP2($idjornada, $busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXjornadaP2($idjornada, $periodo);
}