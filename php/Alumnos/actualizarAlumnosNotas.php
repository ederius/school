<?php
include '../class/Alumno.class.php';
extract($_POST);
$a= new Alumno();

if($idcurso!= "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXcursoJornadaBusqueda2($idcurso, $idjornada, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXcursoJornada2($idcurso, $idjornada, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXcursoBusqueda2($idcurso, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda == "") {
    $a->buscarAlumnosXcurso2($idcurso, $periodo);
}

if($idcurso== "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXBusqueda2($busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXjornadaBusqueda2($idjornada, $busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXjornada2($idjornada, $periodo);
}

