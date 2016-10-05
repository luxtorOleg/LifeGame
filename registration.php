<?php
echo  '<div id="RegistModal" class="modal fade" role="dialog" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                                 <button type="submit" class="btn btn-primary btn-block" >OK</button>
                     </div>
                </div>
            </div>
        </div>';
?>
