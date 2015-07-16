var app = angular.module('biofrut', ['biofrut.controllers', 'biofrut.services']);

//Configuración de rutas de la aplicacion web
app.config(function($stateProvider, $urlRouterProvider){
	
	// defino rutas
	$stateProvider
		// ruta para el home principal que es la unica ruta
		.state('home', {
			url: '/',
			templateUrl: 'partials/home.html',
			controller: 'HomeCtrl'
		});

		// si no ingresan ninguna de las rutas anteriores lo mando por default al home
		$urlRouterProvider.otherwise('/');

});