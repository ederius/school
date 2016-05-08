<?php
include '../class/Alumno.class.php';
extract($_POST);
$a= new Alumno();

if($idcurso!= "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXcursoJornadaBusqueda($idcurso, $idjornada, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXcursoJornada($idcurso, $idjornada, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXcursoBusqueda($idcurso, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda == "") {
    $a->buscarAlumnosXcurso($idcurso, $periodo);
}

if($idcurso== "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXBusqueda($busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXjornadaBusqueda($idjornada, $busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXjornada($idjornada, $periodo);
}

