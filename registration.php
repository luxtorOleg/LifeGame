<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="css/registration.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            </div>
        <div class="col-sm-4">
            <div class="form-group">
            <input name="userName" type="text" class="form-control" placeholder="Name" >
            <input name="userFemale" type="text" class="form-control" placeholder="Surname">
            <input name="FatherName" type="text" class="form-control" placeholder="FatherName">
            <input name="Telephone" type="tel" class="form-control" placeholder="Phone">
            <input name="userEmail" type="email" class="form-control" placeholder="E-mail" >
            <input id = "pass" name="Password" type="password" class="form-control"placeholder="Password" >
        </div>
        <div class="checkbox">
            <label>
                <input name="agreed" type="checkbox" >
                I agree to the terms and conditions
            </label>
            </div>


        <button type="submit" class="btn btn-primary btn-block" >
            OK
        </button>
</div>

    <div class="col-sm-4">
    </div>
</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
