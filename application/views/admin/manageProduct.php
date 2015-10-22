


<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <!--            <p class="lead">Shop Name</p>-->
            <div class="list-group">
<!--                <a href="--><?//=base_url().'Admin/home'?><!--" class="list-group-item"><i class="fa fa-home"></i> Home</a>-->
                <a href="<?=base_url().'Admin/addProduct'?>" class="list-group-item"><i class="fa fa-plus"></i> Add Product</a>
                <a href="<?=base_url().'Admin/manageProduct'?>" class="list-group-item"><i class="fa fa-edit"></i> Manage Products</a>
<!--                <a href="--><?//=base_url().'Admin/manageUsers'?><!--" class="list-group-item"><i class="fa fa-users"></i> Manage Users</a>-->
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <?php
                    if(isset($_SESSION['successMsg'])){
                        echo '<div style="padding : 0.8em;"><span style="color: #2ECC71; font-size : 1.4em;">'.$_SESSION['successMsg'].'</span></div>';
                        unset($_SESSION['successMsg']);
                    }
                ?>

                <?php
                    if(count($products) == 0){
                        echo '<center><i><h3>No data available</h3></i></center>';
                    }

                    foreach($products as $product){
                    ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <div class="thumbnailx">
                                    <img src="<?=$product->img?>" style="" alt="">
                                </div>
                                <div class="caption">
                                    <h4><a href="<?=base_url().'Admin/viewProduct/'.$product->id?>"><?=$product->name?></a></h4>
                                    <span style="font-weight: bold;">P<?=$product->price?>.00</span>
                                    <p style="margin-top: 0.3em;"><?=$product->description?></p>
                                </div>
                                <div class="ratings">
<!--                                    <p class="pull-right">15 reviews</p>-->
                                    <hr style="margin: 0; margin-top: 0.4em;"/>
                                    <p style="padding: 0; margin: 0; margin-top: 0.4em; margin-bottom: 0.4em;">
                                        <a class="action-btns action-btns-delete" data-href="<?=base_url()?>Admin/deleteProduct/<?=$product->id?>"><i class="fa fa-trash"></i></a>
                                        <a class="action-btns" href="<?=base_url()?>Admin/editProduct/<?=$product->id?>"><i class="fa fa-edit"></i></a>
<!--                                        <span class="glyphicon glyphicon-star"></span>-->
<!--                                        <span class="glyphicon glyphicon-star"></span>-->
<!--                                        <span class="glyphicon glyphicon-star"></span>-->
<!--                                        <span class="glyphicon glyphicon-star"></span>-->
<!--                                        <span class="glyphicon glyphicon-star"></span>-->
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                ?>
<!---->
<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <div class="thumbnail">-->
<!--                        <img src="http://placehold.it/320x150" alt="">-->
<!--                        <div class="caption">-->
<!--                            <h4 class="pull-right">$24.99</h4>-->
<!--                            <h4><a href="#">First Product</a>-->
<!--                            </h4>-->
<!--                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>-->
<!--                        </div>-->
<!--                        <div class="ratings">-->
<!--                            <p class="pull-right">15 reviews</p>-->
<!--                            <p>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <div class="thumbnail">-->
<!--                        <img src="http://placehold.it/320x150" alt="">-->
<!--                        <div class="caption">-->
<!--                            <h4 class="pull-right">$64.99</h4>-->
<!--                            <h4><a href="#">Second Product</a>-->
<!--                            </h4>-->
<!--                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                        </div>-->
<!--                        <div class="ratings">-->
<!--                            <p class="pull-right">12 reviews</p>-->
<!--                            <p>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <div class="thumbnail">-->
<!--                        <img src="http://placehold.it/320x150" alt="">-->
<!--                        <div class="caption">-->
<!--                            <h4 class="pull-right">$74.99</h4>-->
<!--                            <h4><a href="#">Third Product</a>-->
<!--                            </h4>-->
<!--                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                        </div>-->
<!--                        <div class="ratings">-->
<!--                            <p class="pull-right">31 reviews</p>-->
<!--                            <p>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <div class="thumbnail">-->
<!--                        <img src="http://placehold.it/320x150" alt="">-->
<!--                        <div class="caption">-->
<!--                            <h4 class="pull-right">$84.99</h4>-->
<!--                            <h4><a href="#">Fourth Product</a>-->
<!--                            </h4>-->
<!--                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                        </div>-->
<!--                        <div class="ratings">-->
<!--                            <p class="pull-right">6 reviews</p>-->
<!--                            <p>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <div class="thumbnail">-->
<!--                        <img src="http://placehold.it/320x150" alt="">-->
<!--                        <div class="caption">-->
<!--                            <h4 class="pull-right">$94.99</h4>-->
<!--                            <h4><a href="#">Fifth Product</a>-->
<!--                            </h4>-->
<!--                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                        </div>-->
<!--                        <div class="ratings">-->
<!--                            <p class="pull-right">18 reviews</p>-->
<!--                            <p>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <h4><a href="#">Like this template?</a>-->
<!--                    </h4>-->
<!--                    <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>-->
<!--                    <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>-->
<!--                </div>-->

            </div>

        </div>

    </div>

</div>
<!-- /.container -->


