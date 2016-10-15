var app = angular.module('myAppLogin', []);
app.controller('myCtrlLogin', function($scope, $http) {
    $scope.myFunction = function() {
        $http({
            url: "api.php",
            method: "POST",
            data: JSON.stringify({"login":$scope.login, "password":$scope.password, "service":"login"})
        }).success(function (data, status, headers, config) {
            if(data[0] != null) {
                $scope.success = "success";
                window.location = "adminPage.php";
            }
            else{
                $scope.error = "error";
            }
        })
    }
});