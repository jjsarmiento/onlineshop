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
                                    <input required="required" style="margin-bottom: 0.8em" type="text" name="regFname"  placeholder="Enter your first name here" class="form-control"/>
                                    <input required="required" style="margin-bottom: 0.8em" type="text" name="regLname" placeholder="Enter your last name here" class="form-control"/>
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

<!--ADD CART MODAL-->
    <div class="modal fade" id="addCart" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="addCart-prod-name">

                    </h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?=base_url()?>Main/addToCart">
                        <div class="thumbnailx" id="modal-img"></div>
                        <h3 id="prod-price">P1000 ea</h3>
                        <hr/>
                        <input type="hidden" name="prodPrice" id="prodPrice" value=""/>
                        <input type="hidden" name="prodId" id="prodId" value=""/>
                        <input type="hidden" name="prodName" id="prodName" value=""/>
                        <input min="1" name="cartQty" id="cartQty" type="number" required="required" class="form-control" placeholder="Enter item quantity"/>
                        <br/>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to cart</button>
                    </form>
                </div>
                <!--                        <div class="modal-footer">-->
                <!--                            <button type="submit" class="btn btn-success">Login</button>-->
                <!--                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
                <!--                        </div>-->
            </div>
        </div>
    </div>
<!--        END ADD CART MODAL-->

<!--CART MODAL-->
<form method="POST" action="<?=base_url()?>Main/checkout">
    <div class="modal fade" id="cartModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cart contents</h4>
                </div>
                <div class="modal-body">
                    <?php
                        if(count($cart) == 0){
                            echo '<center><h3><i>No products on cart</i></h3></center>';
                        }else{
                            ?>
                            <table class="table table-striped" id="in-cart">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price (ea)</th>
                                    <th>Qty</th>
                                    <th>Total Price</th>
                                    <th>Date Added</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($cart as $c){
                                    echo '<tr>';
                                    echo '<td><input name="cart_prodId[]" type="hidden" value="'.$c->product_id.'"/>'.$c->product_name.'</td>';
                                    echo '<td><input name="cart_prodQty[]" type="hidden" value="'.$c->cart_qty.'"/>P'.$c->price_ea.'</td>';
                                    echo '<td><input name="cart_id[]" type="hidden" value="'.$c->id.'"/>x'.$c->cart_qty.'</td>';
                                    echo '<td class="in-cart-tprice"><span style="font-weight:bold; color:red;">P'.$c->price_total.'</span></td>';
                                    echo '<td>'.$c->date_added.'&nbsp;&nbsp;<a href="'.base_url().'Main/deleteCartProduct/'.$c->id.'" class="deleteCartProduct"><i class="fa fa-trash"></i></a></td>';
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                            <hr/>
                            <h3 id="checkoutPrice"></h3>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i> Pay</button>
                            <?php
                        }
                    ?>
                </div>
<!--                <div class="modal-footer">-->
<!--                    <button type="submit" class="btn btn-success">Login</button>-->
<!--                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</form>
<!--        END CART MODAL-->
    </body>
</html>