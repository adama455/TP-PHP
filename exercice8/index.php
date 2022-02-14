

<?php session_start();?>
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
    <title>Exercice7</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE8</h2>
    <div class="container">
        <h1>Entrer un nombre N</h1>
        <form class="formul" action="controller.php" method="post">
            <div class="champ">
                <label for="nb_positif">N:</label>
                <input type="text" id="nb_positif" name="nombre" value='<?php if(!isset($_SESSION['err']['nombre']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nombre']; else '' ?>'> &nbsp;&nbsp; 
                <?php
                    if (isset($_SESSION['err']['nombre'])): ?>
                        <span style="color:red"><?php echo $_SESSION['err']['nombre'] ?></span>    
                <?php endif ?> 
            </div>
            <button class="bouton" type="submit" name="test"> Tester</button>
        </form>
        <?php 
            if(isset($_SESSION['err'])){
                unset($_SESSION['err']);
            }
        ?>
    </div>

<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>