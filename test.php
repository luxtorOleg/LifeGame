<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  </head>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  
  <body ng-app="myApp" ng-controller="myCtrl">

  	 <button ng-click="myFunction()" type="button" class="btn btn-default">Click!</button>

  	 <script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope, $http) {
		    $scope.myFunction = function() {
		           $http({
					    url: "api.php",
					    method: "POST",

					    data: JSON.stringify({"login":"test", "password":"asd", "service":"login"})
					}).success(function (data, status, headers, config) {
					    
					});
		    }
		});
	</script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>