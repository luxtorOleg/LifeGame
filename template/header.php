<?php
 echo '<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LifeGame</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-right" style="max-width: 100%;"  >
                    <form class="navbar-form" >
                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#RegistModal">Registration</button>
                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#LoginModal">Sign In</button>
                    </form>
            </ul>
        </div>
    </div>
</nav>'
?>
