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
                        <h3>1st International Workshop on Blockchain Oriented Software Engineering</h3>
                        <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="http://www.agilegroup.eu/iwbose2018/">http://www.agilegroup.eu/iwbose2018/</a></span></p>
                        <hr class="lineHr">
                    </div><!-- end top-description-text -->

                        <p style="text-align: justify;">
                            The First International Workshop on Blockchain Oriented Software Engineering is held as a
                            Workshop at SANER 2018, and aims at gathering together researchers from the academia and
                            from the industry to focus on the new challenges posed by the new software technology
                            supporting the various blockchains infrastructure. The Workshop’s goal is to gather together
                            practitioners and researchers to discuss on progresses on the research and on the practical usage
                            of blockchain technologies and smart contracts, focusing on the application and definition of
                            software engineering principles and practices specific for such software technology, and for the
                            technologies relying on it. Motivations for this workshop are the ever-increasing interest both in
                            the research community and in the industry on Blockchain and smart contracts principles and
                            applications, being the management of cryptocurrencies the most popular topic. These novelties
                            call for specific tools, paradigms, principles, approaches and research to deal with it and for a
                            specific Blockchain Oriented Software Engineering (BOSE).
                        </p>
                        <p>Workshop topics include, not exhaustively, the following:</p>
                        <ul>
                            <li>Blockchain Oriented Software Engineering</li>
                            <li>Blockchain software analysis and reengineering</li>
                            <li>Formal specification of Blockchain behavior</li>
                            <li>Agile and Lean processes for Blockchain software development</li>
                            <li>Tools for Blockchain software distributed development and community management</li>
                            <li>Smart Contracts reengineering</li>
                            <li>Security and reliability in Blockchain and Smart Contracts</li>
                            <li>Smart Contract Testing (SCT)</li>
                            <li>Blockchain Transaction Testing (BTT) to ensure status integrity</li>
                            <li>Blockchain Software architecture, design notation and metamodels.</li>
                            <li>Smart Contracts Software architecture, design notation and metamodels.</li>
                            <li>Software Engineering for Blockchain</li>
                            <li>Applications in Economy and Finance, Internet of Things, Notarization, Supply chain
                                management</li>
                            <li>Web 3.0 – e-commerce, e-health, e-democracy, social networks, etc.</li>
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
                foreach ($json['workshops']['blockchainOrientedSoftwareEngineering'] as $key => $value) {
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