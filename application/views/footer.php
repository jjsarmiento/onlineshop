<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; ITWA213 2015</p>
            </div>
        </div>
    </footer>

</div>

        <!--LOGIN MODAL-->
        <form method="POST" action="<?=base_url()?>Main/login">
            <div class="modal fade" id="loginModal" role="dialog">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">You have to be logged in to shop!</h4>
                        </div>
                        <div class="modal-body">
                            <!--                <div class="container">-->
                            <input required="required" style="margin-bottom: 0.8em;" type="email" name="loginEmail" class="form-control" placeholder="Your email goes here"/>
                            <input required="required" style="margin-bottom: 0.8em;" type="password" name="loginPassword" class="form-control" placeholder="and your password goes here"/>
                            <!--                </div>-->
                            <span>
                                Don't have an account yet? click <a href="#" id="registerBtn">here</a> to register.
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Login</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
<!--        END LOGIN MODAL-->
        <!--REGISTRATION MODAL-->
        <form method="POST" action="<?=base_url()?>Main/register">
            <div class="modal fade" id="registerModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Register</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                            if(isset($_SESSION['registerErrorMsg'])){
                                echo '<span id="registerErrorMsg" style="color : red;">'.@$_SESSION['errorMsg'].'</span>';
                                unset($_SESSION['registerErrorMsg']);
                            }
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <center><span class="modal-heading">Account Information</span></center>
                                    <input required="required" style="margin-bottom: 0.8em" type="email" name="regEmail" placeholder="Enter your email here (This will serve as your username)" class="form-control"/>
                                    <input required="required" style="margin-bottom: 0.8em" type="password" name="regPass" placeholder="Enter your password here (minimum of 4 characters)" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <center><span class="modal-heading">Personal Information</span></center>
                                    <input required="required" style="margin-bottom: 0.8em" type="text" name="regFname" placeholder="Enter your first name here" class="form-control"/>
                                    <input required="required" style="margin-bottom: 0.8em" type="password" name="regLname" placeholder="Enter your last name here" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Register</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- MODAL END -->

        <!--USER MODAL-->
        <form method="POST" action="<?=base_url()?>Main/login">
            <div class="modal fade" id="userModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Hi <?=$_SESSION['firstname'].' '?> <?=$_SESSION['lastname']?></h4>
                        </div>
                        <div class="modal-body">
                            <a href="<?=base_url()?>Main/logout" class="btn btn-danger btn-block"><i class="fa fa-user"></i> Logout</a>
                        </div>
<!--                        <div class="modal-footer">-->
<!--                            <button type="submit" class="btn btn-success">Login</button>-->
<!--                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </form>
        <!--        END USER MODAL-->
    </body>
</html>