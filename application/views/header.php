<html>
    <head>
<!--        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font-awesome-4.4.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/shop-homepage.css" />

        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
        <script src="<?=base_url()?>assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.deleteCartProduct').click(function(e){
                    if(!confirm('Are you sure you want to remove this product from your cart?')){
                        e.preventDefault();
                    }
                });

                $('#loginBtn').click(function(){
                    $('#loginModal').modal('show');
                });

                $('#registerBtn').click(function(){
                    $('#registerModal').modal('show');
                });

                $('.addCart-nosess').click(function(){
                    $('#loginModal').modal('show');
                });

                $('#userBtn').click(function(){
                    $('#userModal').modal('show');
                });

                $('#cartBtn').click(function(){
                    var prices  = $('#in-cart tbody tr td[class="in-cart-tprice"]'),
                        total   = 0;

                    for(var i=0;i < prices.size(); i++){
                        total   =   parseFloat(total) + parseFloat(prices.eq(i).text().replace(/P/g, ''));
                    }

                    $('#checkoutPrice').empty().append('Checkout Price : <span style="font-weight: bold; color: red;">P'+total+'</span>');
                    $('#cartModal').modal('show');
                });

                $('.addCart').click(function(){
                    $('#addCart-prod-name').empty().append($(this).data('pname'));
                    $('<img class="portrait" src="'+ $(this).attr('data-img') +'">').load(function() {
                        $(this).appendTo($('#modal-img'));
                    });
                    $('#prodPrice').val($(this).data('price'));
                    $('#prodId').val($(this).data('prodid'));
                    $('#prodName').val($(this).data('pname'));
                    $('#prod-price').empty().append('P'+$(this).data('price')+' ea');
                    $('#cartQty').attr('max', $(this).data('qty'));
                    $('#addCart').modal('show');
                });

                if($('#registerErrorMsg').size() != 0){
                    $('#registerModal').modal('show');
                }
            })
        </script>

        <style>
            .modal-heading {
                font-size: 1.3em;
                padding: 0.8em;
            }

            .thumbnailx {
                cursor: pointer;
                position: relative;
                /*width: 175px;*/
                height: 150px;
                overflow: hidden;
                margin-bottom: 0.6em;
                background-color: #333333;
                /*-moz-box-shadow:    3px 3px 5px 6px #ccc;*/
                /*-webkit-box-shadow: 3px 3px 5px 6px #ccc;*/
            }

            .thumbnailx img {
                position: absolute;
                left: 50%;
                top: 50%;
                height: 100%;
                width: auto;
                /*-webkit-transform: translate(-50%,-50%);*/
                /*-ms-transform: translate(-50%,-50%);*/
                transform: translate(-50%,-50%);
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ITWA213</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php
                            if(isset($_SESSION['logged_in'])){
                                echo '<li><a href="#" id="userBtn"><i class="fa fa-user"></i> Welcome '.$_SESSION['firstname'].'</a></li>';
                                echo '<li><a><button class="btn btn-danger" style="margin: 0;" id="cartBtn"><i class="fa fa-cart-plus"></i></button></a></li>';
                            }else{
                                echo '<li><a href="#" id="loginBtn">Login</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>