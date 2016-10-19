<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="css/adminPage.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/login&registrationCtrl.js"></script>
</head>

<body ng-app="myApp">
<?php
include ("template/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 childrenContent">
                    <div class="media" >
                        <div class="media-left">
                            <img src="template/kid.jpg" class="img-rounded media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Vitalchyk Skylskiy</h4>

                            <div class="viewButton">
                                <input type="submit" class="btn btn-default " value="View"/>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
    <div class="row" style="margin-top:20%; height:30%;">
        <div class="col-sm-5"></div>
        <div class="col-sm-2" style="height: auto">
            <button type="button" class="btn btn-primary " style="height: 100%; width: 100%;">+Add</button>
        </div>
        <div class="col-sm-5"></div>
    </div>

<?php
include ("template/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
