<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset')?>" content="<?php bloginfo('html_type')?>">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="logo col-sm-5 col-xs-12">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/logo.png" alt=""></a>
    </div>
    <div class="container-fluid col-sm-4 col-xs-12">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul><li>
<!--                    <a class="navbar-brand" href="--><?php //the_permalink();?><!--">Dịch Vụ</a></li>-->
            </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="#">FAQ</a></li>-->
<!--                <li><a href="#">Liên Hệ</a></li>-->
<!--                <li><a href="#">Đăng nhập</a></li>-->
<!--            </ul>-->
            <?php duytrung_menu( 'primary' ) ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    <div class="lh col-sm-3 col-xs-12">
        <ul>
            <li><p> Hotline <br> 0901234567</p></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/image/icon8.png" alt=""></li>
        </ul>
    </div>
</nav>