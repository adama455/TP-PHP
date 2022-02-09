

<?php
include "fonctions.php";
define("VAL_MIN",10);
$long=rand(32,40);
$larg=rand(VAL_MIN,30);
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
    
    <title>Exercice2</title>
</head>
<body>
    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>

    <h2>EXERCICE2</h2>
    <div class="container">
        <div class="aff-dim">
        <?php echo "Dimension: L= ".$long." , l= ".$larg. "<br>"; ?>

        </div>
        <form class="formulaire"  name="fo" action="#" method="post">

            <div class="lab">
                <label for="Périmetre">Périmetre</label>
            </div>
            <div class="bouton">
                <button><?php echo perimetre_rect($long,$larg);?></button>
            </div><br>
            <div class="lab">
                <label for="Périmetre">Surface</label>
            </div>
            <div class="bouton">    
                <button><?php echo surface_rect($long,$larg);?></button>
            </div><br>
            <div class="lab">
                <label for="Périmetre">Diagonal</label>
            </div>
            <div class="bouton">
                <button><?php echo diagonal_rect($long,$larg);?></button>
            </div>
        </form>
    </div>
    
        <?php 
            include('/opt/lampp/htdocs/TP/footer.php');
        ?>
