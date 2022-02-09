<?php
    include "fonction.php";
    define("VAL_MIN",-5);
    define("VAL_MAX",5);
    $xa=rand(VAL_MIN,VAL_MAX);
    $xb=rand(VAL_MIN,VAL_MAX);
    $ya=rand(VAL_MIN,VAL_MAX);
    $yb=rand(VAL_MIN,VAL_MAX);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Exercice5</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
        <h2>EXERCICE5</h2>
        <div class="container">
            <div class="affiche">
                <?php
                    echo "Soit le Point A de coordonnée: x1= ".$xa." et y1= ".$ya. "<br>";
                    echo "Soit le Point B de coordonnée: x2= ".$xb." et y2= ".$yb. "<br>";
                    echo "La Distance entre A et B est: D[AB]= " .distance($xa,$xb,$ya,$yb);
                ?>
            </div>    
        </div>    
    <?php 
        include('/opt/lampp/htdocs/TP/footer.php'); 
    ?>