<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!--            <p class="lead">Shop Name</p>-->
            <div class="list-group">
                <a href="<?=base_url().'Admin/home'?>" class="list-group-item"><i class="fa fa-home"></i> Home</a>
                <a href="<?=base_url().'Admin/addProduct'?>" class="list-group-item"><i class="fa fa-plus"></i> Add Product</a>
                <a href="<?=base_url().'Admin/manageProduct'?>" class="list-group-item"><i class="fa fa-edit"></i> Manage Products</a>
<!--                <a href="--><?//=base_url().'Admin/manageUsers'?><!--" class="list-group-item"><i class="fa fa-users"></i> Manage Users</a>-->
                <!--                <a href="#" class="list-group-item">Category 3</a>-->
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <?=form_open_multipart('Admin/doAddProduct')?>
                    <div class="col-md-6">
                        <h3>Product Details</h3>
                        <input type="text" class="form-control" name="prodName" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product name here"/>
                        <textarea class="form-control" name="prodDesc" maxlength="150" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product description here. Maximum of 150 characters"></textarea>
                        <input type="number" class="form-control" name="prodQty" required="required" style="margin-bottom: 0.8em;" placeholder="Enter product quantity here"/>
                        <div class="well">
                            Upload Product Image<Br/>
                            <span style="color: #7F8C8D; font-size: 0.9em;">
                                <span style="color:red">*</span> Image file size must be below 4mb<br/>
                                <span style="color:red">*</span> Dimensions must be 320x150 Width = 320, Height = 150
                            </span>
                            <input name="prodImg" type="file" accept="image/*" required="required"/>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</button>
                    </div>
                    <div class="col-md-6">
                        <h3>Additional Information</h3>
                        <textarea rows='7' class="form-control" name="prodAddInfo" maxlength="254" style="margin-bottom: 0.8em;" placeholder="*Optional Enter additional information here. Maximum of 255 characters"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>