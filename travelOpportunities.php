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
        require_once('./utils/headerTopBar.php');
        require_once('./utils/navbar.php');
      ?>

      <!-- Breadcrumbs -->
      <?php
        require_once('./utils/breadcrumb.php');
      ?>
      <!-- end Breadcrumbs -->

        <!-- service section -->
        <section id="service" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
<!--                         <img class="img-responsive padd" align="right" src="img/distanceMainAirport.png" alt="location" /> -->
                        <p style="color: #000;" class="padd">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1pQLdan0Blp2Tn0GwvauYmwpYxXbIg18l" width="100%" height="480"></iframe>
                        </p>
                        <p style="color: #000;" class="padd">
                            Campobasso is near some amazing Italian places. Rome and Naples are well connected and they can be reached by train or by bus in about 3 hours. Click on the placeholders in the map above to check how to get to Campobasso.

                        </p>
                        <p style="text-align: justify;" class="padd"><b>By airplane:</b><br />
                            The nearest international airports are Rome, Naples and Pescara.
                            Campobasso can be reached by train or by bus from such cities. Besides, there is a direct
                            bus that connects Fiumicino airport and Campobasso, operated
                            by ATM Molise.
                        </p>
                        <p style="text-align: justify;" class="padd"><b>By train:</b> <br />
                            <a href="http://www.trenitalia.it">Trenitalia</a> operates the train connections from Rome and
                            Naples to Campobasso. The travel usually takes about 3 hours from both Roma Termini
                            station and Napoli Centrale station. The main station of Campobasso is located in the city
                            centre and it is near the Centrum Palace hotel.
                        </p>
                        <p style="text-align: justify;" class="padd"><b>By bus:</b> <br />
                            ATM Molise operates the bus connections from Rome and Naples to
                            Campobasso, while SATI operates the bus connections from Pescara to Campobasso. The
                            bus can be taken from Roma Tiburtina bus station and Napoli Piazza Garibaldi bus
                            station. From Pescara, it can be taken the bus from the bus station near the central train
                            station (Pescara Centrale). The bus station in Campobasso is 700m far from the train
                            station and 1km far from the city centre. ATM also provides direct buses from <a target="_blank" href="http://atm.bus-booking.it/home/getcorse">Fiumicino Airport</a>.
                        </p>
                      </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end service section -->

        <!-- footer -->
        <?php require_once('./utils/footer.php') ?>
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
