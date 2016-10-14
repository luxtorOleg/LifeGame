<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LifeGame</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">


    <link href="css/login.css" rel="stylesheet">
    <link href="css/registration.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/registration.js"></script>

</head>

    <body ng-app="myAppRegistration" ng-controller="myCtrlRegistration">
    <?php
        include ("template/header.php");
        include ("login.php");
        include ("registration.php");
    ?>

    <?php
        include ("template/footer.php");
    ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>