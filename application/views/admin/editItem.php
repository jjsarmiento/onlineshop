<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!--            <p class="lead">Shop Name</p>-->
            <div class="list-group">
<!--                <a href="--><?//=base_url().'Admin/home'?><!--" class="list-group-item"><i class="fa fa-home"></i> Home</a>-->
                <a href="<?=base_url().'Admin/addProduct'?>" class="list-group-item"><i class="fa fa-plus"></i> Add Product</a>
                <a href="<?=base_url().'Admin/manageProduct'?>" class="list-group-item"><i class="fa fa-edit"></i> Manage Products</a>
                <!--                <a href="--><?//=base_url().'Admin/manageUsers'?><!--" class="list-group-item"><i class="fa fa-users"></i> Manage Users</a>-->
                <!--                <a href="#" class="list-group-item">Category 3</a>-->
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <h3>Edit information for <?=$product['name']?></h3>
                <?php
                    if(isset($_SESSION['successMsg'])){
                        echo $_SESSION['successMsg'];
                        unset($_SESSION['successMsg']);
                    }
                ?>
                <hr/>
                <?=form_open_multipart('Admin/doEditProduct')?>
                    <input type="hidden" name="prodId" value="<?=$product['id']?>"/>
                <div class="col-md-6">
                    <h4>Product Details</h4>
                    Name <input type="text" class="form-control" name="prodName" value="<?=$product['name']?>" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product name here"/>
                    Description <textarea rows="4" class="form-control" name="prodDesc" maxlength="150" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product description here. Maximum of 150 characters"><?=$product['description']?></textarea>
                    Quantity<input type="number" class="form-control" name="prodQty" value="<?=$product['qty']?>" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product quantity here"/>
                    Price<input type="number" class="form-control" name="prodPrice" value="<?=$product['price']?>" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product price here (each)"/>
<!--                    <div class="well">-->
<!--                        --><?php
//                        if(isset($_SESSION['errorMsg'])){
//                            echo '<span style="color: red;"><i class="fa fa-warning"></i> '.$_SESSION['errorMsg'].'</span><br/><br/>';
//                            unset($_SESSION['errorMsg']);
//                        }
//                        ?>
<!--                        Upload Product Image<Br/>-->
<!--                            <span style="color: #7F8C8D; font-size: 0.9em;">-->
<!--                                <span style="color:red">*</span> Image file size must be below 4mb<br/>-->
<!--                                <span style="">*</span> Recommended dimensions must be 320x150 Width = 320, Height = 150-->
<!--                            </span>-->
<!--                        <input name="prodImg" type="file" accept="image/*" required="required"/>-->
<!--                    </div>-->
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Edit Details</button>
                </div>
                <div class="col-md-6">
                    <h4>Additional Information</h4>
                    <textarea rows='7' class="form-control" name="prodAddInfo" maxlength="254" style="margin-bottom: 0.8em;" placeholder="*Optional Enter additional information here. Maximum of 255 characters"><?=$product['add_info']?></textarea>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>