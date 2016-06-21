<?php include 'validacion.php' ;
include 'class/Curso.class.php';
$c=new Curso();
?>
<!doctype html>
<html lang="es" ng-app="school" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <script src="../js/jquery-1.8.2.min.js"></script>
    <link href="../css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="../font/material-design-icons/Material-Design-Icons.eot" type="text/css" rel="stylesheet">
    <link href="../css/style_panel.css"  rel="stylesheet" type="text/css">
    <script src="../js/materialize.js"></script>
    <script src="../js/tinymce/tinymce.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">



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

            <li class='dropdown-button btn botominterno' href='#' data-activates='dropdown1'><i class=" medium mdi-action-account-circle"></i>Profesor</li>

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
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-receipt"></i>Notas</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/profesor/notas/crear">Insertar nota</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>


            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-assignment"></i>Tareas</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>

                                <li><a class="asignarTarea" href="#/profesor/tarea/crear">Asignar Tareas</a></li>
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
                        <li><a class="grey-text text-lighten-3" href="">Inicio</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Alumnos</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Profesores</a></li>
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
<script src="../js/scriptAngularProfesor.js"></script>
<script src="../js/Profesores/buscarProfesor.js"></script>
<script src="../js/Notas/actualizarNotasProfesor.js"></script>
<script src="../js/Tareas/AsignarTareas.js"></script>
<script src="../js/Profesores/insertarNotas.js"></script>



</body>





</html>