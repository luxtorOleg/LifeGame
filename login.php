<?php
echo '<div ng-app="myAppLogin" ng-controller="myCtrlLogin" id="LoginModal" class="modal fade" role="dialog" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="inputs" id="loginInput" ng-model="login" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <input type="password" class="inputs" id="passwordInput" ng-model="password" placeholder="Password">
                            </div>
                            <button type="submit"  ng-click="myFunction()" class="btn btn-default btnSing">Sign in</button>
                             <h3><span style="margin-left:42%; " id="successLabel" class="label label-danger">{{error}}</span></h3>
                        </form>
                    </div>
                </div>
            </div>
        </div> ';
?>