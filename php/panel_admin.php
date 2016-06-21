<?php include 'validacion.php' ;
include 'class/Curso.class.php';
$c=new Curso();
?>
<!doctype html>
<html lang="es" ng-app="school">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <script src="../js/jquery-1.8.2.min.js"></script>
    <link href="../css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="../font/material-design-icons/Material-Design-Icons.eot" type="text/css" rel="stylesheet">
    <script src="../js/materialize.js"></script>
    <link href="../css/style_panel.css"  rel="stylesheet" type="text/css">

    <script>
        $(document).on("ready", function(){
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
            $('ul.tabs').tabs();
            $('select').material_select();
        })
    </script>

    <script>
        $(document).on("ready", function(){
            $(this).addClass("active");
        })
    </script>
</head>
<body>

<div class="row">

    <nav class="top-nav teal ">
        <div class="nav-wrapper center">

            <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
                <i class=" medium mdi-navigation-menu"></i>
            </a>
            <a href="#" class="brand-logo hide-on-large-only"><img src="../imagenes/escudo.png" width="55" height="55" alt="Escudo" /></a>
            <a class="brand-logo center center-align hide-on-med-and-down">Institución Educativa Chon kay</a>
        </div>
    </nav>

</div>

<div class="row">
    <div class="col s2 ">

        <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;  overflow: scroll;">

            <li class='dropdown-button btn botominterno' href='#' data-activates='dropdown1'><i class=" medium mdi-action-account-circle"></i> Administrador</li>

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Editar Perfil</a></li>
                <li class="divider"></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>

            <li class="logo"><a id="logo-container" href="panel_estudiante.php" class="brand-logo">
                    <img src="../imagenes/escudo.png" width="80" height="80" alt="Escudo" class="center-block center-align">
            </li>



            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-account-child"></i>Alumnos</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/alumno/buscar">Buscar Alumnos</a></li>
                                <li><a href="#/admin/alumno/crear">Crear nuevo Alumno</a></li>
                                <li><a href="#/admin/alumno/crearAcudiente">Crear nuevo Acudiente</a></li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </li>


            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-accessibility"></i>Profesores</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/profesor/buscar">Buscar Profesor</a></li>
                                <li><a href="#/admin/profesor/crear">Crear nuevo Profesor</a></li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

          <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-assignment"></i>Horario</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/horario/crearManana">Crear horario mañana</a></li>
                                <li><a href="#/admin/horario/crearTarde">Crear horario tarde</a></li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-assignment-ind"></i>Usuarios</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/usuario/bucar">Buscar usuario</a></li>
                                <li><a href="#/admin/usuario/crear">Crear usuario</a></li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </li>


            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-receipt"></i>Notas</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/notas/crear">Insertar nota</a></li>
                                <li><a href="#/admin/notas/editar">Editar nota</a></li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-content-mail"></i>Notificaciones</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/notificaciones/entrega-boletines"> Notificaciones por correo</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>



            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-event"></i>boletines</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/admin/boletines/generar">Generar Boletines</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>





        </ul>

    </div>


    <div class="col s12 m12 l9 offset-l3  contenido" ng-controller="controlador1">

        <div class="row">
            <div class="col s12 area" ng-view >

                ADMINISTRADOR

            </div>

        </div>

    </div>
    </div>

<div class="row divFooter">
    <footer class="page-footer teal col l10 offset-l2 m12 s12">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Institución Educativa Chon kay</h5>
                    <p class="grey-text text-lighten-4">Aplicativo creado con el fin de facilitarle a los acudientes, profesores, y administradores sus tareas.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Mas Enlaces</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#/admin">Inicio</a></li>
                        <li><a class="grey-text text-lighten-3" href="#/alumnos">Alumnos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#/profesores">Profesores</a></li>
                        <li><a class="grey-text text-lighten-3" href="logout.php">Cerrar Sesión</a></li>
                        <ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2016 Copyright
                <a class="grey-text text-lighten-4 right" href="#!">Riohacha - La Guajira</a>
            </div>
        </div>
    </footer>

</div>



<script src="../js/angular/angular.min.js"></script>
<script src="../js/angular/angular-route.min.js"></script>
<script src="../js/scriptAngular.js"></script>
<script src="../js/Profesores/guardarProfesor.js"></script>
<script src="../js/Profesores/buscarProfesor.js"></script>
<script src="../js/Profesores/editarProfesor.js"></script>
<script src="../js/Profesores/eliminarProfesor.js"></script>
<script src="../js/Usuarios/guardarUsuario.js"></script>
<script src="../js/Usuarios/buscarUsuario.js"></script>
<script src="../js/Usuarios/editarUsuario.js"></script>
<script src="../js/Usuarios/eliminarUsuario.js"></script>
<script src="../js/Notas/actualizarNotas.js"></script>
<script src="../js/Notificaciones/notificaciones.js"></script>
<script src="../js/Boletines/boletines.js"></script>
<script src="../js/Alumnos/guardarAlumnos.js"></script>
<script src="../js/Alumnos/buscarAlumnos.js"></script>
<script src="../js/Alumnos/editarAlumno.js"></script>
<script src="../js/Alumnos/eliminarAlumno.js"></script>


</body>
</html>