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
<div class="breadcrumbs section-parallax parallaxBg" style="background-image: url(img/venue/university/universita1.png);">
    <div class="layer"></div>
    <div class="container parallax-content">
        <h3 class="pull-left">REproducibility Studies and NEgative Results (RENE) Track</h3>
        <ul class="pull-right breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">RENE Track</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->

<!-- what-we-do -->
<section id="what-we-do" class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="text-align: justify;">
                    The 25th edition of the International Conference on Software Analysis, Evolution, and Reengineering (SANER’18) would like to encourage researchers to (1) reproduce results from previous papers and (2) publish studies with important and relevant negative or null results (results which fail to show an effect, yet demonstrate the research paths that did not pay off).
                </p>
                <p style="text-align: justify;">
                    We would also like to encourage the publication of the negative results or reproducible aspects of previously published work (in the spirit of journal-first submissions). This previously published work includes accepted submissions for the 2018 SANER main track.
                </p>
                <ol style="text-align: justify;">
                    <li>
                        Reproducibility studies. Inspired by ISSTA’18 Reproducibility studies, the papers in this category must go beyond simply re-implementing an algorithm and/or re-running the artifacts provided by the original paper. Such submissions should at least apply the approach on new data sets (open-source or proprietary). Particularly, reproducibility studies are encouraged to target techniques that previously were evaluated only on proprietary or open-source systems. A reproducibility study should clearly report on results that the authors were able to reproduce as well as on the aspects of the work that were irreproducible. We encourage reproducibility studies to follow the ACM guidelines on reproducibility (different team, different experimental setup): “The measurement can be obtained with stated precision by a different team, a different measuring system, in a different location on multiple trials. For computational experiments, this means that an independent group can obtain the same result using artifacts, which they develop completely independently.”
                    </li>
                    <li>
                        Negative results papers. We seek papers that report on negative results. We seek negative results for all types of software engineering research in any empirical area (qualitative, quantitative, case study, experiment, etc.). For example, did your controlled experiment on the value of dual monitors in pair programming not show an improvement over single monitors? Even if negative, results obtained are still valuable when they are either not obvious or disprove widely accepted wisdom. As Walter Tichy writes, “Negative results, if trustworthy, are extremely important for narrowing down the search space. They eliminate useless hypotheses and thus reorient and speed up the search for better approaches.”
                    </li>
                </ol>
                <br>
                <strong>Evaluation Criteria</strong>
                <p style="text-align: justify; margin-top: 15px;">
                    Both Reproducibility Studies and Negative Results submissions will be evaluated according to the following standards:
                </p>
                <p>
                    <ul>
                        <li>Depth and breadth of the empirical studies</li>
                        <li>Clarity of writing</li>
                        <li>Appropriateness of conclusions</li>
                        <li>Amount of useful, actionable insights</li>
                        <li>Availability of artifacts</li>
                        <li>Underlying methodological rigor. For example, a negative result due primarily to misaligned expectations or due to lack of statistical power (small samples) is not a good submission. The negative result should be a result of a lack of effect, not lack of methodological rigor. </li>
                    </ul>
                </p>
                <p style="text-align: justify;">
                    Most importantly, we expect reproducibility studies to clearly point out the artifacts the study is built upon, and to provide the links to all the artifacts in the submission (the only exception will be given to those papers that reproduce the results on proprietary datasets that can not be publicly released).
                </p>
                <br>
                <p style="text-align: justify;">
                    <strong>Submission Instructions</strong>
                    <p style="text-align: justify;">
                        Submissions must be original, in the sense that the findings and writing have not been previously published or under consideration elsewhere. However, as either reproducibility studies or negative results, some overlap with previous work is expected. Please make that clear in the paper.
                    </p>
                    <p style="text-align: justify;">
                        Publication format should follow the SANER guidelines. Choose “RENE:Replication” or “RENE:NegativeResult” as the submission type.
                    </p>
                    <p style="text-align: justify;">
                        Length: There are two formats. Appendices to conference submissions or previous work by the authors can be described in 4 pages. New reproducibility studies and new descriptions of negative results will have a length of 10 pages.
                    </p>
                </p>
                <p style="text-align: justify;">
                    <br>
                    <strong>Important Dates</strong>
                <ul>
                    <li>Abstract submission deadline: January 5, 2018 AoE</li>
                    <li>Paper submission deadline: January 12, 2018 AoE</li>
                    <li>Notifications: February 9, 2018</li>
                    <li>Camera Ready: February 22, 2018</li>
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
