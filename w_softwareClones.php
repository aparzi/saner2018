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
                    <h3>12th International Workshop on Software Clones</h3>
                    <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="https://iwsc2018.github.io">https://iwsc2018.github.io</a></span></p>
                    <hr class="lineHr">
                </div><!-- end top-description-text -->
                <p style="text-align: justify;">
                    Software clones are often a result of copying and pasting as an act of ad-hoc reuse by
                    programmers, and can occur at many levels, from simple statement sequences to blocks,
                    methods, classes, source files, subsystems, models, architectures and entire designs, and in all
                    software artifacts (code, models, requirements or architecture documentation, etc.). Software
                    clone research is of high relevance for software engineering research and practice today.
                </p>
                <p>A partial list of the topics is as follows (this list is by no means exhaustive, and it is a goal of the
                    workshop to further extend it):</p>
                <ul>
                    <li>Use cases for clones and clone management in the software lifecycle</li>
                    <li>Experiences with clones and clone management in practice</li>
                    <li>Types and nature of clones in software systems</li>
                    <li>Causes and effects of clones</li>
                    <li>Techniques and algorithms for clone detection, search, analysis, and management</li>
                    <li>Clone and clone pattern visualization</li>
                    <li>Tools and systems for detecting software clones</li>
                    <li>Applications of clone detection and analysis</li>
                    <li>System architecture and clones</li>
                    <li>Effect of clones to system complexity and quality</li>
                    <li>Clone analysis in families of similar systems</li>
                    <li>Measures of code similarity</li>
                    <li>Economic and trade-off models for clone removal</li>
                    <li>Evaluation and benchmarking of detection methods</li>
                    <li>Licensing and plagiarism issues</li>
                    <li>Clone-aware software design and development</li>
                    <li>Refactoring through clone analysis</li>
                    <li>Higher-level clones in models and designs</li>
                    <li>Clone evolution and variation</li>
                    <li>Role of clones in software system evolution</li>
                </ul>
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
            foreach ($json['workshops']['softwareClones'] as $key => $value) {
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