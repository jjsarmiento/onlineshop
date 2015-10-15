<style>
    .prod-img {
        background-color: black;
        max-width: 100%;
        max-height: 30em;
        border: solid #BDC3C7;
        border-radius: 0.3em;
    }
</style>
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
                <h3><?=$prod['name']?></h3>
<!--                <a href="#"><i class="fa fa-edit"></i></a>-->
<!--                <a href="#"><i class="fa fa-trash"></i></a>-->
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <img class="prod-img" src="<?=$prod['img']?>">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-9">
                                <?=$prod['description']?>
                            </div>
                            <div class="col-md-3">
                                <span style="color: #2980B9; font-weight: bold; font-size: 1.4em;">P<?=$prod['price']?><br/></span>
                                Stock : <span style="font-weight: bold"><?=$prod['qty']?></span> pc(s)
                            </div>
                        </div>
                        <hr/>
                        <?php
                            if($prod['add_info'] != ''){
                                echo 'Additional Information : '.$prod['add_info'].'<hr/>';
                            }
                        ?>
                        <span class="pull-right">
                            <a class="action-btns action-btns-delete" data-href="<?=base_url()?>Admin/deleteProduct/<?=$prod['id']?>"><i class="fa fa-trash"></i></a>
                            <a class="action-btns" href="<?=base_url()?>Admin/editProduct/<?=$prod['id']?>"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>