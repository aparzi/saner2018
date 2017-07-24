<?php

?>

<div class="container">
    <div class="row">
        <div class="col-md-1 col-xs-1">
            <img style="padding-top: 8px;" class="zm-logo" src="img/logoSaner.png" alt="Saner logo" />
        </div>
        <div class="col-md-11 col-xs-11">
            <!-- start Navigation -->
            <nav class="navbar navbar-saner" role="navigation">
                <div class="container">
                    <!-- Zetta Menu 1 -->
                    <ul onClick="" class="zetta-menu zm-response-switch zm-full-width zm-effect-slide-top">
                        <li style="background: #fff;"></li>

                        <!-- Home Menu -->
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class = "zm-active"'?> >
                            <a  href="index.php">Home</a>
                        </li>
                        <!-- /Home Menu -->
                        <!-- Call For Papers -->
                        <li
                            <?php
                            if ((basename($_SERVER['PHP_SELF']) == 'restrack.php.php') || (basename($_SERVER['PHP_SELF']) == 'eratrack.php') || (basename($_SERVER['PHP_SELF']) == 'tooltrack.php')) {
                                echo 'class = "zm-active"';
                            }
                            ?>
                        ><a>Call For Papers <span class="caret"></span></a>
                            <ul class="w-200">
                                <li><a href="restrack.php?p=Research Track">Research Track</a></li>
                                <li><a href="eratrack.php?p=ERA Track">ERA Track</a></li>
                                <li><a href="#">Tool Track</a></li>
                                <li><a href="#">Industrial Track</a></li>
                                <li><a href="#">Negative Results</a></li>
                                <li><a href="#">Workshop Track</a></li>
                            </ul>
                        </li>
                        <!-- /Call For Papers -->
                        <!-- Venue -->
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'venue.php') echo 'class = "zm-active"'?>>
                            <a href="venue.php?p=venue">Venue</a>
                        </li>
                        <!-- /Venue -->
                        <!-- Travel Information -->
                        <li
                          <?php
                            if ((basename($_SERVER['PHP_SELF']) == 'accommodation.php') || (basename($_SERVER['PHP_SELF']) == 'travelOpportunities.php') || (basename($_SERVER['PHP_SELF']) == 'visaInformation.php')) {
                              echo 'class = "zm-active"';
                            }
                          ?>
                        ><a>Travel Information <span class="caret"></span></a>
                            <ul class="w-200">
                                <li><a href="accommodation.php?p=accommodation">Accommodation</a></li>
                                <li><a href="travelOpportunities.php?p=travel Opportunities">Travel Opportunities</a></li>
                                <li><a href="visaInformation.php?p=visa Information">Visa Information</a></li>
                            </ul>
                        </li>
                        <!-- /Travel Information -->
                        <!-- Supporters start -->
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'supporters.php') echo 'class = "zm-active"'?>>
                            <a href="supporters.php?p=supporters">Supporters</a>
                        </li>
                        <!-- Supporters end -->
                        <!-- Organization -->
                        <li
                        <?php
                          if ((basename($_SERVER['PHP_SELF']) == 'organizingCommittee.php') || (basename($_SERVER['PHP_SELF']) == 'steeringCommittee.php') || (basename($_SERVER['PHP_SELF']) == 'programCommittee.php')) {
                            echo 'class = "zm-active"';
                          }
                        ?>
                        ><a>Organization <span class="caret"></span></a>
                          <ul class="w-200">
                              <li><a href="organizingCommittee.php?p=organizing Committee">Organizing Committee</a></li>
                              <li><a href="programCommittee.php?p=program Committee">Program Committee</a></li>
                              <li><a href="steeringCommittee.php?p=steering Committee">Steering Committee</a></li>
                          </ul>
                        </li>
                        <!-- Organization end -->
                        <!-- Search Place
                        <li class="zm-search zm-right-item">
                            <form>
                                <input id="search-1" name="search" type="search">
                                <label for="search-1" class="fa fa-search"></label>
                            </form>
                        </li>
                        <!-- /Search Place -->
                    </ul>
                    <!-- /Zetta Menu 1 -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>
