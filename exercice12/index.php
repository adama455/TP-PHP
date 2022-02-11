

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
        <h3>Veullez choisir une langue</h3>
        <form action="" method="post">
            <label for=""> Choix :</label>
            <select name="choix" style="width:8vw;height: 5vh; font-size:1em" >
                <option value="f"> Francais</option>
                <option value="a"> Anglais</option>
            </select>
            <br>
            <br>
            <button type="submit" name="valider" value="">valider</button>   
        </form>   
    </div>
    <div class="">
        <?php
         include("controller.php");
        ?>
    </div>
<?php
    require ("/opt/lampp/htdocs/TP/footer.php");    
?>

