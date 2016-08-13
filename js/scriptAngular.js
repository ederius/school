


var miAplicacion= angular.module('school',['ngRoute'])

miAplicacion.controller('controlador1', ['$scope', function($scope){


}])

miAplicacion.config(['$routeProvider',function($routerProvider) {
    $routerProvider.when('/admin', {
        templateUrl: '../plantillas/inicio.php'
    }).when('/admin/alumno/buscar', {
            templateUrl: '../plantillas/Alumnos/buscarAlumno.php'
    }).when('/admin/alumno/crear', {
        templateUrl: '../plantillas/Alumnos/crearAlumno.php'
    }).when('/admin/alumno/crearAcudiente', {
        templateUrl: '../plantillas/Alumnos/crearAcudiente.php'
    }).when('/admin/profesor/buscar', {
        templateUrl: '../plantillas/Profesores/buscarProfesor.php'
    }).when('/admin/profesor/crear', {
        templateUrl: '../plantillas/Profesores/crearProfesor.php'
    }).when('/admin/usuario/bucar', {
        templateUrl: '../plantillas/Usuarios/buscarUsuario.php'
    }).when('/admin/usuario/crear', {
        templateUrl: '../plantillas/Usuarios/crearUsuario.php'
    }).when('/admin/notas/crear', {
        templateUrl: '../plantillas/Notas/crearNotas.php'
    }).when('/admin/notas/editar', {
        templateUrl: '../plantillas/Notas/actualizarNotas.php'
    }).when('/admin/notificaciones/entrega-boletines', {
        templateUrl: '../plantillas/Notificaciones/Notificaciones.php'
    }).when('/admin/boletines/generar', {
        templateUrl: '../plantillas/Boletines/boletines.php'
    }).when('/admin/horario/crearHorario', {
        templateUrl: '../plantillas/Horario/crearHorario.php'
    }).when('/admin/horario/eliminarHorario', {
        templateUrl: '../plantillas/Horario/crearHorarioTarde.php'
    }).otherwise({
        redirectTo:'/admin',
        templateUrl:'../plantillas/inicio.php'
    });

}]);
