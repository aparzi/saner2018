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
                    The 25th edition of the International Conference on Software Analysis, Evolution, and Reengineering (SANER’18) will feature an Industry track. The aim of this track is to bring together practitioners and researchers for an exchange of ideas, problems, and results. It provides a platform for people in industry and academia to interact with one another. The papers in the Industry track follow the general topics specified in the SANER 2018 research track.
                </p>
                <p style="text-align: justify;">
                    A good industry paper can present industrial practice and experience reports describing problems (and their solutions) encountered in real applications, describe the challenges involved in the knowledge transfer from academia to industry and vice-versa for real projects, and discuss a challenging problem currently occurring in industry, for which practitioners want feedback and-or inputs from the academic community. ICSE SEIP (International Conference on Software Engineering, Software Engineering in Practice) track will be a good reference to get an understanding of the expectations.
                </p>
                <p style="text-align: justify;">
                    Upon notification of acceptance, all authors of accepted papers will be asked to complete an IEEE Copyright form and will receive further instructions for preparing their camera ready versions. At least one author of each paper is expected to present the results at the SANER 2018 conference. All accepted contributions will be published in the conference electronic proceedings.
                </p>
                <br>
                <strong>Evaluation Criteria</strong>
                <p style="text-align: justify; margin-top: 15px;">
                    Submissions will be reviewed by at least two members of the Program Committee of the Industry Track, and they will be evaluated on the basis of industry relevance, originality, soundness, empirical and-or practical validation, quality and consistency of presentation.
                </p>
                <p style="text-align: justify; margin-top: 15px;">
                <strong>Important note:</strong> SANER 2018 follows a full double-blind review process.​ Submissions that do not adhere to these limits or that violate the formatting guidelines will be desk-rejected without review.
                </p>
                <br>
                <strong>Submission Instructions</strong>
                <p style="text-align: justify; margin-top: 15px;">
                    Submissions should be at most 5 pages (including all text, references, appendices, and figures) and conform to the <a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">IEEE proceedings style</a> (i.e., the same used from the main SANER conference). All submissions have to be written exclusively in English. Submissions must not have been previously published or concurrently submitted elsewhere.
                </p>
                Papers must be submitted in PDF format electronically through Easy Chair.
                <p style="text-align: justify;">
                    <br>
                    <strong>Important Dates</strong>
                <ul>
                    <li>Abstract Submission deadline: January 5, 2018 AoE</li>
                    <li>Paper Submission deadline: January 12, 2018 AoE</li>
                    <li>Notification: February 9, 2018</li>
                    <li>Camera Ready: February 22, 2018</li>
                    <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=saner2018">https://easychair.org/conferences/?conf=saner2018</a></li>
                </ul>

                </p>

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
