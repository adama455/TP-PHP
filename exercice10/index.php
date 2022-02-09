

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Exercice8</title>
</head>
<body>
    <div class="container">

        <form class="formul" action="controller.php" method="post">
            <div class="champ">
                <label for="nb_positif">N:</label>
                <input type="text" id="nb_positif" name="nombre"  value="<?php if(!isset($_SESSION['error']['nombre']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nombre']; else ''  ?>"> &nbsp;&nbsp; 
                <?php
                    if (isset($_SESSION['err']['nombre'])): ?>
                        <span style="color:red"><?php echo $_SESSION['err']['nombre'] ?></span>    
                <?php endif ?> 
            </div>
            <button class="bouton" type="submit" name="test">Tester</button>
        </form>
        <?php 
            if(isset($_SESSION['err'])){
                unset($_SESSION['err']);
            }
        ?>
    </div>

    
</body>
</html>