


var miAplicacion= angular.module('school',['ngRoute'])

miAplicacion.controller('controlador1', ['$scope', function($scope){


}])

miAplicacion.config(['$routeProvider',function($routerProvider) {
    $routerProvider.when('/estudiante', {
        templateUrl: '../plantillas/inicio.php'
    }).when('/estudiante/boletin/descargar', {
        templateUrl: '../plantillas/Boletines/descargarBoletines.php'
    }).when('/estudiante/tarea/descargar', {
        templateUrl: '../plantillas/tareas/descargarTarea.php'
    }).otherwise({
        redirectTo:'/estudiante',
        templateUrl:'../plantillas/inicio.php'
    });

}]);


