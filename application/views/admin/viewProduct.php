<style>
    .prod-img {
        background-color: black;
        max-width: 100%;
        max-height: 30em;
    }
</style>
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
                <h3>Product Details of <?=$prod['name']?></h3>
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <img class="prod-img" src="<?=$prod['img']?>">
                    </div>
                    <div class="col-md-8">
                        Product Description : <?=$prod['description']?><br/>
                        Qty : <?=$prod['qty']?><br/>
                        <?php
                            if($prod['add_info'] != ''){
                                echo 'Additional Information : '.$prod['add_info'];
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>