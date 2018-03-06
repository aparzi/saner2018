<?php
    function insession($name) {
        include("sessions/" . $name . ".php");
    }
    
    function paper() {
        return "<i class=\"fas fa-file-alt\"></i>";
    }
    
    function tooldemo() {
        return "<i class=\"fas fa-wrench\"></i>";
    }
    
    function era() {
        return "<i class=\"fas fa-spinner\"></i>";
    }
    
    function rene() {
        return "<i class=\"fas fa-flask\"></i>";
    }
    
    function industry() {
        return "<i class=\"fas fa-industry\"></i>";
    }
    
    function jf() {
        return "<i class=\"far fa-clipboard\"></i>";
    }
?>
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
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon-96x96.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <style>
        details summary {
            cursor: pointer;
        }
        
        .prog_leisure td:nth-child(2) {
            font-style: italic;
        }
        
        .prog_social {
            background-color: #ffdddd;
        }
        
        .prog_social td:nth-child(2) {
            font-weight: bold;
        }
        
        .prog_social a {
            color: black;
        }
        
        .prog_global {
            background-color: #eeffee;
        }
        
        .prog_global td:nth-child(2) {
            font-weight: bold;
        }
        
        .prog_functional {
            background-color: #eeeeee;
        }
        
        .prog_sessions {
            background-color: #ffffff;
        }
        .prog_sessions td summary {
             font-weight: bold;
        }
        
        ul {
            list-style-type: none;
        }
        
        .program_paper i {
            margin-left: -20px;
            padding-right: 6px;
        }
        
        .program_paper .title {
            display: block;
            margin-top: -20px;
        }

        
        table.program {
            line-height: 21px;
/*             border-color: #3a3a3a; */
            
/*             border-collapse: separate; */
/*             border-spacing: 0; */
/*             border-width: 1px 0 0 1px; */
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 0 0 1.5em;
        }
        
        .program td {
            padding: 8px;
            
        }
        
        .program tr td:nth-child(1) {
            width: 5%;
        }
        
        .program tr td:nth-child(2) {
            width: 50%;
        }
        
        .program .header td {
            padding: 8px;
        }
        
        .program_paper .title {
        }
        
        .program_paper .authors {
            font-style: italic;
            font-size: 10pt;
        }
        
        .chair {
            font-weight: normal;
            padding-top: 4px;
            font-size: 10pt;
        }
    </style>

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

<!-- acceptedPapers -->
<section id="acceptedPapers" class="content">
    <div class="container">
        <div class="row padd">
            <div class="col-md-12">
                <h3>Daily Schedule</h3>
                <hr class="lineHr">
                
                <h5>Legend:</h5>
                <ul>
                    <li><?= paper() ?> Technical Research Paper</li>
                    <li><?= jf() ?> Journal First Paper</li>
                    <li><?= tooldemo() ?> Tool Demo</li>
                    <li><?= era() ?> ERA Track Paper</li>
                    <li><?= rene() ?> RENE Track Paper</li>
                    <li><?= industry() ?> Industry Track Paper</li>
                </ul>
                <br/><br/>
                
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="3" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Wednesday, 21st </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left;" align="center" valign="top">Aula Magna</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-08:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">08:30-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    Opening<br/>
                                    <div class="chair">Session Chairs: Rocco Oliveto, Massimiliano Di Penta, David C. Shepherd</div>
                                </td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:15</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    "A Decade of Software Quality Analysis in Practice: Surprises, Anecdotes and Lessons Learned" by Elmar Jurgens<br/>
                                    <div class="chair">Session Chair: Massimiliano Di Penta</div>
                                </td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("program_analysis"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("td_mining"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("software_logging"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("i_reengineering"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("testing"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("rene_past_results"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("program_repair"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("td_software_evolution"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">16:30-17:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("mobile_development"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"></td>
                            </tr>
                            
                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top"><a href="socialEvents">Reception @ Blue Note Music Club</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="3" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Thursday, 22nd </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left;" align="center" valign="top">Aula Magna</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:15</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    "Towards a New Digital Business Operating System" by Jan Bosch<br/>
                                    <div class="chair">Session Chair: Rocco Oliveto</div>
                                </td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("software_quality"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("behavior_runtime_analysis"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("design_analysis"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("defect_prediction"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("apis"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("era"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("exploring_code_bases"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("td_hands_on"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">16:30-17:15</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("language_models"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("binary_analysis"); ?></td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">17:15-18:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Open Steering Committee Meeting</td>
                            </tr>
                            
                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top"><a href="socialEvents">Banquet @ Piana dei Mulini</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="3" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Friday, 23rd </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left;" align="center" valign="top">Aula Magna</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:15</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    "Compilers are Sprinters; IDEs are Marathoners" by Peter Gromov<br/>
                                    <div class="chair">Session Chair: David C. Shepherd</div>
                                </td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("developers_collaboration"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("rene_code_smells"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("refactoring"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("i_development_testing"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("recommender_systems"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("software_security"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">16:30-17:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    Most Influential Papers<br/>
                                    <div class="chair">Session Chair: Serge Demeyer</div>
                                </td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">17:30-18:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    Closing<br/>
                                    <div class="chair">Session Chairs: Rocco Oliveto, Serge Demeyer</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    /* DOPO APERTURA DEL MODAL */
    $("#bioBosh, #abstractBosh").on('shown.bs.modal', function(e){
        $('li.zm-active').removeClass('zm-active')
    });
    /* DOPO LA CHIUSURA DEL MODAL */
    $("#bioBosh, #abstractBosh").on('hidden.bs.modal', function(e){
        $('#key').addClass('zm-active')
    });
</script>

<script>
    //Animation Wow.js
    new WOW().init();
</script>

</body>
</html>
