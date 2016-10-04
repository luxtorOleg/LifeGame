<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <div class ="container"  >
        <div class ="row"  >
            <div class="col-sm-4" >
            </div>
            <div class="col-sm-4" >
                <form class="form-inline">
                    <div class="form-group">
                        <div class="labelDiv">
                            <label for="loginInput">Login</label>
                         </div>
                    <input type="text" class="form-control" id="loginInput" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <div class="labelDiv">
                            <label for="passwordInput">Password</label>
                        </div>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Sign in</button>
                </form>
            </div>
            <div class="col-sm-4" >
            </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>