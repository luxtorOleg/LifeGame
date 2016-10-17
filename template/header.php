<?php
 echo '<nav class="navbar navbar-default navbar-absolute-top" >
    <div class="container-fluid">
        <div class="navbar-header">
        <img src="template/emblem.png" class="img-circle navbar-brand" alt="Cinque Terre" width="50" height="50">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LifeGame</a>
        </div>';
if(!isset($_SESSION['user_id']))
{
    echo   '<div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav navbar-right" style="max-width: 100%;"  >
                        <form class="navbar-form" >
                            <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#RegistModal">Registration</button>
                            <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#LoginModal">Sign In</button>
                        </form>
                </ul>
            </div>';
}
else
{
    echo   '<div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav navbar-right" style="max-width: 100%;"  >
                        <form class="navbar-form" >
                            <button type="button" class="btn btn-success" data-toggle="modal">Logout</button>
                        </form>
                </ul>
            </div>';
}
 
echo '</div>
</nav>';
?>
