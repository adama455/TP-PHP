

<?php
include "fonction.php";
    define("VAL_MIN",1);
    define("VAL_MAX",100);

    $nbre1=rand(VAL_MIN,VAL_MAX);
    $nbre2=rand(VAL_MIN,VAL_MAX);
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
    <title>Exercice3</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE3</h2>
    <div class="container">
        <div class="aff-dim">
            <?php 
                echo "Nommbre 1= " .$nbre1." ".","." "."Nommbre 2= ".$nbre2 ;
            ?>

        </div>
        <form class="formul"  name="fo" action="#" method="post">
            <div class="part1">
                <div class="lab">
                    <label for="Périmetre">Somme</label>
                </div>
                <div class="bouton">
                    <button><?php echo somme($nbre1,$nbre2);?></button>
                </div><br>
                <div class="lab">
                    <label for="Périmetre">Exposant</label>
                </div>
                <div class="bouton">    
                    <button><?php echo exposent($nbre1,$nbre2);?></button>
                </div><br>
                <div class="lab">
                    <label for="Périmetre">Differece</label>
                </div>
                <div class="bouton">
                    <button><?php echo difference($nbre1,$nbre2);?></button>
                </div>
                <div class="lab">
                    <label for="Périmetre">Produit</label>
                </div>
                <div class="bouton">
                    <button><?php echo produit($nbre1,$nbre2);?></button>
                </div>
            </div>

            <div class="part2">
                <div class="lab">
                    <label for="Périmetre">Modulo</label>
                </div>
                <div class="bouton">
                    <button><?php echo modulo($nbre1,$nbre2);?></button>
                </div>
                <div class="lab">
                    <label for="Périmetre">Division</label>
                </div>
                <div class="bouton">
                    <button><?php echo division($nbre1,$nbre2);?></button>
                </div>
                
                <div class="lab">
                    <label for="Périmetre">Carre</label>
                </div>
                <div class="bouton">
                    <button><?php echo carre($nbre1,$nbre2);?></button>
                </div>
            </div>
        </form>
    </div>
    <div class="pagination" style="display: flex;justify-content: space-around;">
        <a href="../exercice2/index.php">
            <button style="font-size:30px">Precedent
                <i class="material-icons"></i>
            </button>
        </a>
        <a href="../exercice4/index.php">
            <button style="font-size:30px">Suivant
                <i class="material-icons"></i>
            </button>
        </a>
    </div>
    
    <?php
        include('/opt/lampp/htdocs/TP/footer.php'); 
    ?>
