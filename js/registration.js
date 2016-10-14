var app = angular.module('myAppRegistration', []);
app.controller('myCtrlRegistration', function($scope, $http) {
    $scope.myFunction = function() {
        $http({
            url: "api.php",
            method: "POST",
            data: JSON.stringify({"login":$scope.login,"name":$scope.name,"surname":$scope.surname,"email":$scope.email, "password":$scope.password, "service":"registration"})
        }).success(function (data, status, headers, config) {

        });
    }
});
