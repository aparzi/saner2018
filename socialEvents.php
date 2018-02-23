<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANER 2018 - Campobasso, Italy</title>
        <meta charset="utf-8">
        <meta name="description" content="SANER 2018 - Campobasso, Italy">
        <meta name="author" content="Angelo Parziale" />
        <meta name="keywords" content="saner, html5, css3, campobasso, italy, molise" />
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Icons/FontAwesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- totop -->
        <link rel="stylesheet" href="css/ui.totop.css" />
        <!-- owl carusol -->
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <!-- zetta menu -->
        <link rel="stylesheet" href="css/zetta-menu.min.css" />
        <!-- Animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="css/style.css" />
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

    </head>

    <body>

        <?php
          require_once ('./utils/headerTopBar.php');
          require_once ('./utils/navbar.php');
        ?>

        <!-- Breadcrumbs -->
        <?php
          require_once ('./utils/breadcrumb.php');
        ?>
        <!-- end Breadcrumbs -->

        <!-- portfolio section -->
        <section class="content">
            <div class="container">
                <!--<h3>Social Events</h3>
                <hr class="lineHr">-->
                
                <div class="row">
                    <h5>Tuesday March 20 - Welcome cocktail</h5>
                    <hr class="lineHr" style="margin-bottom: 10px;">
                    
                        <div class="col-md-7 padd">
                            <div class="owl-carousel owl-item-1">
                                <div class="item">
                                    <img src="img/social/unimol.jpg" alt="University of Molise" />
                                    <div class="description">
                                        <p class="layerCaption">University of Molise</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5 padd">
                            <p  style="text-align: justify;">A buffet light dinner will be served at the University of Molise (conference venue). The welcome cocktail is open to all workshop and conference attendees and it will start at 19:00.
                            </p>
                        </div>

                    </div>

                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <h5>Wednesday March 21 - Reception</h5>
                    <hr class="lineHr" style="margin-bottom: 10px;">
                    
                    <div class="col-md-5 padd">
                        <p style="text-align: justify;">
                            The conference reception will be held on the evening of Wednesday March 21st, 19:00 at Mazzamaurielle, a bruschetteria/pub located in the heart of the Campobasso historical center. The reception includes a rich buffet with free open bar and a guided tour of the historical center.</br>
                            <a href="https://goo.gl/maps/D1oP5wMHvQG2" target="_blank">Map</a>
                        </p>
                    </div>
                    
                    <div class="col-md-7 padd">
                        <div class="owl-carousel owl-item-1">
                            <div class="item">
                                <img src="img/social/mazzamaurielle1.jpg" alt="Mazzamaurielle" />
                                <div class="description">
                                    <p class="layerCaption">Mazzamaurielle</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <h5>Thursday March 22 - Banquet</h5>
                    <hr class="lineHr" style="margin-bottom: 10px;">
                    
                    <div class="col-md-7 padd">
                        <div class="owl-carousel owl-item-1">
                            <div class="item">
                                <img src="img/social/piana.jpg" alt="Piana dei Mulini"/>
                                <div class="description">
                                    <p class="layerCaption">Piana dei Mulini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 padd">
                        <p style="text-align: justify;">
                            The conference banquet will be held on the evening of Thursday March 22nd, 19:00 at "Piana dei Mulini", an ancient residence which dates back to the end of XVIII century. Departure will be at 18:30 from the conference venue by bus (~20 minutes).<br/>
                            <a href="http://www.lapianadeimulini.it/?lang=en" target="_blank">Website</a></br>
                            <a href="https://goo.gl/maps/QfttxekVxFU2" target="_blank">Map</a>
                        </p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
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

    </body>
</html>
