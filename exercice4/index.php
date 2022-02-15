<?php
include "fonction.php";
define("VAL_MIN",1);
define("VAL_MAX",50);

$nbr1=rand(VAL_MIN,VAL_MAX);
$nbr2=rand(VAL_MIN,VAL_MAX);
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
    <title>Exercice4</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2 class="animate__backOutUp">EXERCICE4</h2>
    <div class="container">
        <div class="nbre">
            <?php
            echo "Avant permutation: Nbre1= ".$nbr1 ." et Nbre2= ".$nbr2 ."<br><br>";
            permutation($nbr1,$nbr2);
            ?>
        </div>    
    </div> 
    <div class="pagination" style="display: flex;justify-content: space-around;">
        <a href="../exercice3/index.php">
            <button style="font-size:30px">Precedent
                <i class="material-icons"></i>
            </button>
        </a>
        <a href="../exercice5/index.php">
            <button style="font-size:30px">Suivant
                <i class="material-icons"></i>
            </button>
        </a>
    </div>   
   
<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>
