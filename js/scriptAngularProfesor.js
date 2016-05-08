


var miAplicacion= angular.module('school',['ngRoute'])

miAplicacion.controller('controlador1', ['$scope', function($scope){


}])

miAplicacion.config(['$routeProvider',function($routerProvider) {
    $routerProvider.when('/profesor', {
        templateUrl: '../plantillas/inicio.php'
    }).when('/profesor/notas/crear', {
        templateUrl: '../plantillas/Notas/crearNotasProfesor.php'
    }).when('/profesor/notas/editar', {
        templateUrl: '../plantillas/Notas/actualizarNotas.php'
    }).when('/profesor/tarea/crear', {
        templateUrl: '../plantillas/Tareas/asignarTareas.php'
    }).otherwise({
        redirectTo:'/profesor',
        templateUrl:'../plantillas/inicio.php'
    });

}]);


