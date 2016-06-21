<?php
include '../class/Alumno.class.php';
extract($_POST);
$a= new Alumno();

if($idcurso!= "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXcursoJornadaBusquedaP($idcurso, $idjornada, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXcursoJornadaP($idcurso, $idjornada, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXcursoBusquedaP($idcurso, $busqueda, $periodo);
}

if($idcurso!= "" && $idjornada == "" && $busqueda == "") {
    $a->buscarAlumnosXcursoP($idcurso, $periodo);
}

if($idcurso== "" && $idjornada == "" && $busqueda != "") {
    $a->buscarAlumnosXBusquedaP($busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda != "") {
    $a->buscarAlumnosXjornadaBusquedaP($idjornada, $busqueda, $periodo);
}

if($idcurso== "" && $idjornada != "" && $busqueda == "") {
    $a->buscarAlumnosXjornadaP($idjornada, $periodo);
}

