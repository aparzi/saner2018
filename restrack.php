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
require_once('./utils/headerTopBar.php');
require_once('./utils/navbar.php');
?>

<!-- Breadcrumbs -->
<?php
require_once('./utils/breadcrumb.php');
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
                <strong>Submission Instructions</strong>
                <p style="text-align: justify; margin-top: 15px;">
                Submitted papers must have been neither previously accepted for publication nor concurrently submitted for review in another journal, book, conference, or workshop.
                </p>
                <p style="text-align: justify;">
                    All submissions must come in PDF format and conform, at time of submission, to the <a href="https://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">IEEE Conference Proceedings Formatting Guidelines</a>
                    (title in 24pt font and full text in 10pt font, LaTEX users must use <code>\documentclass[10pt,conference]{IEEEtran}</code> without including the <code>compsoc</code> or <code>compsocconf</code> option.
                        Also, papers must comply with the <a href="https://www.ieee.org/publications_standards/publications/rights/authorrightsresponsibilities.html" target="_blank">IEEE Policy on Authorship</a>.
                </p>
                <p style="text-align: justify;">
                    All submissions must be in English. Submissions should not exceed 12 pages (the last 2 pages for references only), and should be uploaded electronically in PDF format via EasyChair. Submissions that do not adhere to these limits or that violate the formatting guidelines will be desk-rejected without review.
                </p>
                <p style="text-align: justify;">
                    <strong>Important note: SANER 2018 follows a full double-blind review process.</strong>
                    In order to be compliant with the double-blind policy, submitted papers must adhere to the following rules (largely reused from <a href="http://ase2017.org/author_instructions" target="_blank">ASE 2017 double-blind instructions</a>):
                    <ul>
                        <li>Author names and affiliations must be omitted.</li>
                        <li>References to authors' own related work must be in the third person. (For example, not "We build on our previous work..." but rather "We build on the work of...")</li>
                        <li>There may be cases in which the current submission is clear follow up of one of your previous work, and despite what recommended in the previous point, reviewers will clearly associate authorship of such a previous work to the current submission. In this case, you may decide to anonymize the reference itself at submission time. For example: "based on previous results [10]" .. where the reference is reported as "[10] Anonymous Authors. Omitted per double blind reviewing." In doing so, however, please make sure that the Saner 2018 submission is self-contained and its content can be reviewed and understood without accessing the previous paper.</li>
                        <li>Do not include acknowledgements of people, grants, organizations, etc. that would give away your identity. You may, of course, add these acknowledgements in the camera-ready version.</li>
                        <li>If you use an identifiable naming convention for your work, such as a project name, use a different name for your submission, which you may indicate has been changed for the purposes of double-blind reviewing. This includes names that may unblind individual authors and their institutions. For example, if your project is called GoogleDeveloperHelper, which makes it clear the work was done at Google, for the submission version, use the name DeveloperHelper or BigCompanyDeveloperHelper instead.</li>
                        <li>Avoid revealing the institution affiliations of authors or at which the work was performed. For example, if the evaluation includes a user study conducted with undergraduates from the CS 101 class that you teach, you might say "The study participants consist of 200 students in an introductory CS course." You can of course add the institutional information in the camera-ready. Similar suggestions apply for work conducted in specific organizations (e.g., industrial studies). In such cases, avoid to mention the organization's name. Instead, you may just refer the organization as "Org" or "Company", etc. When appropriate and when this does not help too much in revealing the company's name, you might mention the context (e.g., financial organization, videogame development company, etc.).</li>
                        <li>Avoid linking directly to code repositories or tool deployments which can reveal your identity. Whenever possible, please use the EasyChair additional material field to submit a .zip or .tgz file including additional material. This is of course possible for small attachments. In other cases, you may post anonymized links (with a warning that following said link may reveal authors' identities), include links to anonymized code or deployments. When creating such repositories, a good practice can be asking somebody in your team to test the anonymization of the repository and of its content. In case anonymization is difficult to be achieved and you still want to provide availability of data/tools, you can simply state that you will link to the code or deployment in the camera-ready version. Program committee members are asked to keep into account the double-blind policy when reviewing papers, and therefore not requiring full availability of artifacts at submission time.</li>
                    </ul>
                </p>
                <br>
                <strong>Special Issue</strong>
                <p style="text-align: justify; margin-top: 15px;">
                    Authors of selected research papers accepted at SANER 2018 will be invited to submit revised,
                    extended versions of their manuscripts for a special issue of the <a href="https://link.springer.com/journal/10664" target="_blank">Empirical Software Engineering journal (EMSE)</a>, edited by Springer.
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
            foreach ($json['commiteeMembers']['researchTrack'] as $key => $value) {
                ?>
                <div class="col-md-4">
                    <?php if (!is_null($value['website'])) { ?>
                        <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Massimiliano Di Penta' || $value['name'] == 'David C. Shepherd') { echo ' <span style="font-size: 18px;">(co-Chair)</span>';} ?>
                    <?php } else { ?>
                        <a><?php echo $value['name'] ?></a>
                    <?php } ?>
                    <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                    <p><?php echo $value['nation'] ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

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
