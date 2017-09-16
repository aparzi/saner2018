<?php
$page = $_GET['p'];
$page = str_replace('_', ' ', $page);
?>
<div class="breadcrumbs section-parallax parallaxBg" style="background-image: url(img/venue/university/universita1.png);">
    <div class="layer"></div>
    <div class="container parallax-content">
        <h3 class="pull-left"><?php echo ucfirst($page); ?></h3>
        <ul class="pull-right breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active"><?php echo ucfirst($page); ?></li>
        </ul>
    </div>
</div>
