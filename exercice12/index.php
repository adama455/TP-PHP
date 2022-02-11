

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Exercice12</title>
</head>
<body>
    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE12</h2>
    <div class="container">
        <h1>Veullez choisir une langue</h1>
        <form action="#" method="post">
            <div>
                <label for="fr">mois-FR</label>
                <a href="controller.php"><input type="radio" name="mfr" id="fr" checked ></a>
            </div>
            <div>
                <label for="en">mois-En</label>
                <a href="controller.php"><input type="radio" name="men" id="en" ></a>
            </div>
        </form>
    </div>

<?php
    require ("/opt/lampp/htdocs/TP/footer.php");    
?>

