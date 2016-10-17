var app = angular.module('myApp', []);
app.controller('RegistrationCtrl', function($scope, $http) {
    $scope.registrationFunction = function() {
        $http({
            url: "api.php",
            method: "POST",
            data: JSON.stringify({"login":$scope.login,"name":$scope.name,"surname":$scope.surname,"email":$scope.email, "password":$scope.password, "service":"registration"})
        }).success(function (data, status, headers, config) {
            if(data.indexOf("[0] => 00000") !== -1) {
                $scope.success = "success";
               document.getElementById("registrationForm").remove();
                document.getElementById("registrationOkBtn").disabled = true;
            }
            else{
                $scope.error = "error";
            }
        })
    }
});
app.controller('LoginCtrl', function($scope, $http) {
    $scope.disableInputs = false;
    $scope.loginFunction = function() {
        $scope.disableInputs = true;

        $http({
            url: "api.php",
            method: "POST",
            data: JSON.stringify({"login":$scope.login, "password":$scope.password, "service":"login"})
        }).success(function (data, status, headers, config) {
            $scope.disableInputs = false;

            if(data["login"] == $scope.login){
                window.location = "adminPage.php";
            }
            else{
                $scope.error = "error";
            }
        }).error(function (data, status){
             $scope.disableInputs = false;
        });
    }
});
