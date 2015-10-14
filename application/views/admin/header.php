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
            $('#userBtn').click(function(){
                $('#userModal').modal('show');
            });
        })
    </script>

    <style>
        .modal-heading {
            font-size: 1.3em;
            padding: 0.8em;
        }

        .user-list:hover {
            background-color: #ECF0F1;
        }

        .user-list {
            /*background-color: #ECF0F1;*/
            /*border-radius: 0.3em;*/
            padding: 0.4em;
            /*margin-bottom: 0.8em;*/
        }

        .user-list-item {
            font-weight: bold;
            font-size: 1.3em;
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
                        echo '<li><a href="#" id="userBtn">Welcome, Admin '.$_SESSION['firstname'].'</a></li>';
                    }else{
                        echo '<li><a href="#" id="loginBtn">Login</a></li>';
                    }
                    ?>

                    <li>
                        <a href="#">Home</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="#">Contact</a>-->
<!--                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>