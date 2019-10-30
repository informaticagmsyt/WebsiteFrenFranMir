var app = angular.module('afiliacion', ['720kb.datepicker']);
var baseUrl = "js/json/";
var d = new Date();
app.controller('registro', function($scope, $http) {

	$scope.estados = [];
	$scope.municipios = [];
	$scope.parroquias = [];
	$scope.pais=[];
	$scope.persona= [];
	$scope.cedula= "";

	var d = new Date();
	$http.get(baseUrl + 'estado.php')
	.success(function(data) {
		$scope.estados = data;
	}).error(function(data, status){ });
/*
	$http.get('http://localhost/gabinete/js/json/cedula.php?id=22345207')
	.success(function(data) {
		console.log(data);
		$scope.persona = data;
		console.log(data['id']);
		
	}).error(function(data, status){ });
*/

	$http.get(baseUrl + 'pais.php')
	.success(function(data) {
		$scope.pais = data;
		
	}).error(function(data, status){ });

	$scope.llenarMunicipios = function(id) {
		$http.get(baseUrl + 'municipio.php?id='+id)
		.success(function(data) {
			console.log(data);
			$scope.municipios = data;
		}).error(function(data, status){ });
	}

	$scope.llenarParroquias = function(id) {
		$http.get(baseUrl + 'parroquia.php?id='+id)
		.success(function(data) {
			console.log(data);
			$scope.parroquias = data;
		}).error(function(data, status) { });





	}
});



