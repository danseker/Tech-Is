<?php
session_start();
include_once "admin/config/connectDB.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--Icons-->
    <script src="admin/js/lumino.glyphs.js"></script>
</head>

<body>

    <!--	Header	-->
    <div id="header">
        <div class="container-fuild">
            <div class="row">
                <?php include_once "modules/logo/logo.php"; ?>
                <?php include_once "modules/search/search-box.php"; ?>
                <?php include_once "includes/sign_notification.php"; ?>
                <?php include_once "modules/cart/cart-notification.php"; ?>
            </div>
        </div>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!--	End Header	-->

    <!--	Body	-->
    <div id="body">
        <div class="container">
            <!-- Menu -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php include_once "modules/header/menu.php"; ?>
                </div>
            </div>
            <!-- End Menu -->
            <div class="row">
                <div id="main" class="col-lg-8 col-md-12 col-sm-12">
                    <!--	Slider	-->
                    <?php include_once "modules/slide/slide.php"; ?>
                    <!--	End Slider	-->
                    <?php if (isset($_GET['page_layout'])) {
                        switch ($_GET['page_layout']) {
                            case 'product':
                                include_once "modules/product/product.php";
                                break;
                            case 'category':
                                include_once "modules/category/category.php";
                                break;
                            case 'search':
                                include_once "modules/search/search.php";
                                break;
                            case 'cart':
                                include_once "modules/cart/cart.php";
                                break;
                            case 'success':
                                include_once "modules/cart/success.php";
                                break;
                            default:
                                break;
                        }
                    } else {
                        include_once "modules/product/featured.php";
                        include_once "modules/product/lasted.php";
                    } ?>
                </div>

                <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
                    <?php include_once "modules/banner/banner.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!--	End Body    -->
    <!--    Footer  -->
    <?php include_once "modules/footer/footer.php"; ?>
    <!--    End footer  -->
</body>

</html>