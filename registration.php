<?php
echo  '<div id="RegistModal"  class="modal fade" role="dialog" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <form class="form-group registrationForm" action="registrationBackEnd.php" method="post">
                                <input name="userLogin" type="text" class="form-control registrationInput" ng-model="login" placeholder="Login" >
                                <input name="userName" type="text" class="form-control registrationInput"  ng-model="name" placeholder="Name">
                                <input name="userSurname" type="text" class="form-control registrationInput"  ng-model="surname" placeholder="Surname">
                                <input name="userEmail" type="email" class="form-control registrationInput"  ng-model="email" placeholder="E-mail" >
                                <input name="userPassword" type="password" class="form-control registrationInput"  ng-model="password" placeholder="Password" >
                            </form>
                            <div class="checkbox">
                                <label class="AgreeConditionsCheckbox">
                                    <input name="agreed" type="checkbox" >
                                    I agree to the terms and conditions
                                </label>
                            </div>
                                 <button type="submit" ng-click="myFunction()" class="btn btn-primary btn-block" >OK</button>
                     </div>
                </div>
            </div>
        </div>';
?>
