<?php

$user = "2018saner";
$pass = "xo8shaiPoh";

#Se la variabile PHP_AUTH_USER non è settata, il browser mostra la finestra di login
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm=" . " Effettua il login");
    Header("HTTP/1.0 401 Unauthorized");
    exit;
} elseif ($_SERVER['PHP_AUTH_USER'] == $user && $_SERVER['PHP_AUTH_PW'] == $pass) {
    # in caso di login corretta
    header("Location: https://drive.google.com/open?id=1d5NRDowRH_ICRDTtXICoKfyHTud2fVy9");
} else {
    ?>
    <h1>500 Internal Server Error</h1>
    <?php
}
