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
        <!-- layerSlider -->
        <link rel="stylesheet" href="css/layerslider.css" />
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

        <!-- what-we-do -->
        <section id="what-we-do" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align: justify;">
                            We strongly recommend that you consult the official website of the Italian Ministry of Foreign Affairs <a target="_blank" href="http://www.esteri.it/visti/index_eng.asp">http://www.esteri.it/visti/index_eng.asp</a> for updated and detailed information for foreigners regarding entrance visas for Italy and permits of stay. Foreign participants should contact the Italian Embassy or Consulate in their home country as soon as possible to determine their particular visa requirements. Participants requiring visas should initiate the application process at least 3 months prior to their departure date.
                            The conference organizers cannot assist participants with their visa application process and cannot intervene with Embassies or Consulates on behalf of any participant.
                            <br />The SANER 2018 organizers are able to provide <b>official invitation letters</b> to attendees and authors of accepted papers, posters, or members of the conference committee. For people who have not participated in any SANER or related event before, are not an author of an accepted paper, and for which the committee is not aware of their work in this area we kindly ask to furnish your vitae, showing your academic and/or technical credentials when sending your request to us. For official invitation letters, refer all requests to <a target="_blank" href="saner-info@unimol.it">saner-info@unimol.it</a>.
                            <br />
                            <br />
                            Those requesting a letter should allow up to one week to receive it. All requests are handled in the order they are received. The <b>information</b> below should be included with the request:</p>
                        <ul>
                            <li>Name (as it appears on attendee’s passport) and mailing address</li>
                            <li>Attendee’s registration confirmation number</li>
                            <li>Authors may indicate their paper title. Speakers can provide the title of their talk.</li>
                            <li>Include a fax number or email address of where letter can be sent.</li>
                        </ul>

                    </div>
                </div>
            </div><!-- end of row -->
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
        <script src="js/greensock.js"></script>
        <script src="js/layerslider.transitions.js"></script>
        <script src="js/layerslider.kreaturamedia.jquery.js"></script>
        <script src="js/importantDates.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            jQuery("#layerslider").layerSlider({
                responsive: false,
                responsiveUnder: 1280,
                layersContainer: 1280,
                skin: 'noskin',
                hoverPrevNext: false,
                skinsPath: '../layerslider/skins/'
            });
        </script>

        <script>
            //Animation Wow.js
            new WOW().init();
        </script>

    </body>
</html>
