
<?php
    // include('/opt/lampp/htdocs/TP/entete.php');
?>

<?php
    //chargement du header
    //chargement du menu
    //Charge mes fonctions ou inclure
    include "fonction.php";
    define ("VAL_MIN",1);
    define ("VAL_MAX",100); 
    //Generer un nbre de maniere 
  //aleatoire entre 1 et 100
    $cote=rand(VAL_MIN,VAL_MAX);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Get your own code at fontawesome.com -->
    <!-- //style global -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- style courant

    <title>Entete</title>
    </head>
    <body>  -->
    <?php include "/opt/lampp/htdocs/TP/menu.php";?>
    <h2>EXERCICE1</h2>
    <div class="container">
        <div class="aff-cote">
            <?php echo "Coté= ".$cote."<br>";?>
        </div>
        <form class="formul"  name="fo" action="#" method="post">

            <!-- <div class="lab">
                <label for="Périmetre">Périmetre</label>
            </div> -->
            <div class="bouton">
                <label class="lab" for="Périmetre">Périmetre</label>
                <button><?php echo perimetre($cote);?></button>
            </div><br>
            <!-- <div class="lab">
                <label for="Périmetre">Surface</label>
            </div> -->
            <div class="bouton">  
                <label class="lab" for="Périmetre">Surface</label>
                <button><?php echo surface($cote);?></button>
            </div><br>
            <!-- <div class="lab">
                <label for="Périmetre">Diagonal</label>
            </div> -->
            <div class="bouton">
                <label class="lab" for="Périmetre">Diagonal</label>     
                <button><?php echo diagonal($cote);?></button>
            </div>
        </form>
    </div>
    <div class="pagination" style="display: flex;justify-content: space-around;">
        <a href="../exercice2/index.php">
            <button style="font-size:30px">Suivant
                <i class="material-icons"></i>
            </button>
        </a>
        <!-- <a href="../TP/index.php">Precedant</a> -->
    </div>
<?php
    //chargement du header
    include "/opt/lampp/htdocs/TP/footer.php";
?>
    