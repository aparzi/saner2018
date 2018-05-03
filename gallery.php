<!DOCTYPE html>
<html lang="en">
<head>
    <title>SANER 2018 - Campobasso, Italy</title>
    <meta charset="utf-8">
    <meta name="description" content="SANER 2018 - Campobasso, Italy">
    <meta name="author" content="Angelo Parziale"/>
    <meta name="keywords" content="saner, html5, css3, campobasso, italy, molise"/>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Icons/FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!-- totop -->
    <link rel="stylesheet" href="css/ui.totop.css"/>
    <!-- owl carusol -->
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <!-- zetta menu -->
    <link rel="stylesheet" href="css/zetta-menu.min.css"/>
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css"/>
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon-96x96.png">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        .owl-carousel-custom .item{
            margin: 3px;
        }
        .owl-carousel-custom .item img{
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

<?php
require_once('./utils/headerTopBar.php');
require_once('./utils/navbar.php');
?>

<!-- Breadcrumbs -->
<?php
require_once('./utils/breadcrumb.php');
?>
<!-- end Breadcrumbs -->

<section id="what-we-do" class="content">
    <div class="container">
        <!-- CAROUSEL resturant -->
        <div class="row">
            <div class="col-md-12">
                <h5>SANER 2018 Monday 19</h5>
                <hr class="lineHr" style="margin-bottom: 20px;">
                <div class="owl-carousel-custom">
                    <?php loadImages('monday', 14) ?>
                </div>
            </div>
        </div>
        <!-- CAROUSEL futsal -->
        <div class="row">
            <div class="col-md-12">
                <h5>SANER 2018 Futsal</h5>
                <hr class="lineHr" style="margin-bottom: 20px;">
                <div class="owl-carousel-custom">
                    <?php loadImages('futsal', 13) ?>
                </div>
            </div>
        </div><br>
        <!-- CAROUSEL tuesday -->
        <div class="row">
            <div class="col-md-12">
                <h5>SANER 2018 Tuesday 20</h5>
                <hr class="lineHr" style="margin-bottom: 20px;">
                <div class="owl-carousel-custom">
                    <?php loadImages('tuesday', 14) ?>
                </div>
            </div>
        </div><br>
        <!-- CAROUSEL wednesday -->
        <div class="row">
            <div class="col-md-12">
                <h5>SANER 2018 Wednesday 21</h5>
                <hr class="lineHr" style="margin-bottom: 20px;">
                <div class="owl-carousel-custom">
                    <?php loadImages('wednesday', 10) ?>
                </div>
            </div>
        </div><br>
        <!-- CAROUSEL thursday -->
        <div class="row">
            <div class="col-md-12">
                <h5>SANER 2018 Thursday 22</h5>
                <hr class="lineHr" style="margin-bottom: 20px;">
                <div class="owl-carousel-custom">
                    <?php loadImages('thursday', 17) ?>
                </div>
            </div>
        </div><br>
        <!-- CAROUSEL friday -->
        <div class="row">
            <div class="col-md-12">
                <h5>SANER 2018 Friday 23</h5>
                <hr class="lineHr" style="margin-bottom: 20px;">
                <div class="owl-carousel-custom">
                    <?php loadImages('friday', 16) ?>
                </div>
            </div>
        </div><br>
    </div>
</section>

<!-- footer -->
<?php require_once ('./utils/footer.php') ?>
<!-- end footer -->

<!-- jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.ui.totop.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>

<script>
    //Animation Wow.js
    new WOW().init();
</script>

<script>
    $(document).ready(function() {

        $(".owl-carousel-custom").owlCarousel({
            autoPlay: 4500, //Set AutoPlay to 3 seconds
            items:2,
            margin:10,
            autoHeight:true,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });

    });
</script>

</body>
</html>

<?php

function loadImages($nameFolder, $size) {
for ($i = 0; $i < $size; $i++) {
    ?>
    <div class="item"><img src="img/gallery/<?=$nameFolder?>/<?=$i?>.JPG" alt="Image"></div>
    <?php
}
}
