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

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-description-text" style="text-align: left; margin: 30px 0 0 0;">
                    <h3>Machine Learning Techniques for Software Quality Evaluation</h3>
                    <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="https://maltesque.github.io">https://maltesque.github.io</a></span></p>
                    <hr class="lineHr">
                </div><!-- end top-description-text -->

                <p style="text-align: justify;">
                    The assessment of software quality is one of the most multifaceted (e.g., structural quality,
                    quality-in- use, product quality, process quality, etc.) and subjective aspects of software
                    engineering (since in many cases is substantially based on expert judgement). Such assessments
                    can be performed at all almost of phases of software development (from project inception to
                    maintenance) and at different levels of granularity (from source code to architecture). However,
                    human judgement is: (a) inherently biased by implicit, subjective criteria applied in the evaluation
                    process, and (b) its economical effectiveness is limited compared to automated or semi-
                    automated approaches. To this end, researchers are still looking for new, more effective methods
                    of assessing various qualitative characteristics of software systems and the related processes. In
                    recent years we have been observing a rising interest in adopting various approaches to exploiting
                    machine learning (ML) and automated decision-making processes in several areas of software
                    engineering. These models and algorithms help to reduce effort and risk related to human
                    judgment in favor of automated systems, which are able to make informed decisions based on
                    available data and evaluated with objective criteria. The aim of the workshop is to provide a forum
                    for researchers and practitioners to present and discuss new ideas, trends and results concerning
                    the application of ML to software quality assessment. We expect that the workshop will help in:
                    (a) validation of existing and exploring new applications of ML, (b) comparing their efficiency and
                    effectiveness, both among other automated approaches and the human judgement, and (c)
                    adapting ML approaches already used in other areas of science to software engineering problems.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Organizers</h3>
                <hr class="lineHr">
            </div>
        </div>
        <?php
        $content = file_get_contents('config/production.json');
        $json = json_decode($content, true);
        ?>
        <div class="row"> <?php
            foreach ($json['workshops']['MachineLearningTechniques'] as $key => $value) {
                ?>
                <div class="col-md-4">
                    <p style="margin: 0;"><?php echo $value['name'] ?></p>
                    <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                    <p><?php echo $value['nation'] ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

</body>

</html>