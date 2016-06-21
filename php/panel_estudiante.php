<?php include 'validacion.php' ; ?>
<!doctype html>
<html lang="es" ng-app="school">
<head>
    <meta charset="UTF-8">
    <title>Panel de Alumnos</title>
    <script src="../js/jquery-1.8.2.min.js"></script>
    <link href="../css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="../font/material-design-icons/Material-Design-Icons.eot" rel="stylesheet">
    <link href="../css/style_panel.css"  rel="stylesheet" type="text/css">

    <script src="../js/materialize.js"></script>

    <script>
        $(document).on("ready", function(){
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
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
            <a class="brand-logo center center-align hide-on-med-and-down">Institución Educativa Choncai</a>
        </div>
    </nav>

</div>

<div class="row">
    <div class="col s2">

        <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;  overflow: scroll;">

            <li class='dropdown-button btn botominterno' href='#' data-activates='dropdown1'><i class=" medium mdi-action-account-circle"></i> Estudiante</li>

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
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-assignment-returned"></i>Boletines</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/estudiante/boletin/descargar">Descargar  Boletines</a></li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class=" small mdi-action-assignment-turned-in"></i>Tareas</a>
                        <div class="collapsible-body teal lighten-5" style="">
                            <ul>
                                <li><a href="#/estudiante/tarea/descargar">Descargar Tareas</a></li>

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

</body>
<script src="../js/angular/angular.min.js"></script>
<script src="../js/angular/angular-route.min.js"></script>
<script src="../js/scritpAngularEstudiante.js"></script>
<script src="../js/Boletines/boletines.js"></script>
<script src="../js/Tareas/buscarTarea.js"></script>


</html>