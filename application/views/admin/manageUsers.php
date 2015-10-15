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
            <?php
                foreach($users as $user){
                    echo $user->firstname.'<br/>';
                }
            ?>
            <div class="user-list col-md-3">
                <a class="user-list-item" href="<?=base_url()?>Admin/checkUser">haha</a>
            </div>
            <div class="user-list col-md-3">
                <a class="user-list-item" href="<?=base_url()?>Admin/checkUser">haha</a>
            </div>
            <div class="user-list col-md-3">
                <a class="user-list-item" href="<?=base_url()?>Admin/checkUser">haha</a>
            </div>
            <div class="user-list col-md-3">
                <a class="user-list-item" href="<?=base_url()?>Admin/checkUser">haha</a>
            </div>
        </div>
    </div>
</div>