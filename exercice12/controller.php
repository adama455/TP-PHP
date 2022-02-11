<?php
    include ('fonction.php');
    $mfr=$_POST['mfr'];
    $mfr=$_POST['mer'];

    if (isset($_POST['mfr'])) {
       echo tabMois($moisFr);
    } 

?>