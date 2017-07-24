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
                The SANER 2018 technical track invites high quality submissions of papers describing original and unpublished research results. We encourage submissions describing various types of research, such as, empirical, theoretical, tool-oriented, etc.
                </p>
                <p style="text-align: justify;">
                The topics of the submissions should be of direct interest to the software analysis, evolution, and reengineering community. Topics of interest include, but are not limited to:
                </p>
                <ul>
                    <li>Software Analysis, Parsing, and Fact Extraction</li>
                    <li>Software Reverse Engineering and Reengineering</li>
                    <li>Program Comprehension</li>
                    <li>Software Evolution Analysis</li>
                    <li>Software Architecture Recovery and Reverse Architecting</li>
                    <li>Program Transformation and Refactoring</li>
                    <li>Mining Software Repositories  and Software Analytics</li>
                    <li>Software Visualization</li>
                    <li>Software Reconstruction and Migration</li>
                    <li>Software Maintenance and Evolution</li>
                    <li>Program Repair</li>
                    <li>Software Release Engineering, Continuous Integration and Delivery</li>
                    <li>Education related to all of the above topics</li>
                    <li>Legal aspects</li>
                </ul>
                <br>
                <strong>Evaluation Criteria</strong>
                <p style="text-align: justify; margin-top: 15px;">
                Submissions will be evaluated by at least three program committee members. The evaluation will focus on the novelty, originality, importance to the field, proper use of research methods, and presentation of the submissions. We strongly encourage authors to make available all data and software they use in their work, in order to allow for verification and replication of their results.
                </p>
                <br>
                <strong>Submission instructions</strong>
                <p style="text-align: justify; margin-top: 15px;">
                Submitted papers must have been neither previously accepted for publication nor concurrently submitted for review in another journal, book, conference, or workshop.
                </p>
                <p style="text-align: justify;">
                Papers must conform to the IEEE proceedings paper format guidelines and must comply with the IEEE Policy on Authorship. If the paper is accepted, at least one author must attend the conference and present the paper. Accepted papers will appear in the IEEE Digital Library.
                </p>
                <p style="text-align: justify;">
                    <strong>Important note: SANER 2018 follows a full double-blind review process.</strong> For details see the Instructions for Authors. All submissions must be in English. Submissions that do not adhere to these limits or that violate the formatting guidelines will be desk-rejected without review.
                </p>
                <p style="text-align: justify;">
                Submissions should not exceed 12 pages (the last 2 pages for references only), and should be uploaded electronically in PDF format via EasyChair.
                </p>
                <p style="text-align: justify;">
                    <br>
                <strong>Important Dates</strong>
                <ul>
                    <li>Abstract submission deadline: October 20, 2017 AoE</li>
                    <li>Paper submission deadline: October 27, 2017 AoE</li>
                    <li>Notifications: December 17, 2017</li>
                    <li>Camera Ready: January 15, 2018</li>
                    <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=saner2018">https://easychair.org/conferences/?conf=saner2018</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div><!-- end of row -->
</section>
<section id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Committee Members</h3>
                <hr class="lineHr">
            </div>
        </div>
        <?php
        $content = file_get_contents('config/production.json');
        $json = json_decode($content, true);
        ?>
        <div class="row"> <?php
            foreach ($json['commiteeMembers'] as $key => $value) {
                ?>
                <div class="col-md-4">
                    <?php if (!is_null($value['website'])) { ?>
                        <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                    <?php } else { ?>
                        <a><?php echo $value['name'] ?></a>
                    <?php } ?>
                    <p><?php echo $value['affiliation'] ?></p>
                </div>
                <?php
            }
            ?>
        </div>
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
