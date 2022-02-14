<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Exercice7</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE7</h2>
    <div class="container">
        <h3 class="animate__animated animate__rubberBand animate__repeat-2	2">Entrer une date (jour/mois/année)</h3>
        <form class="formul animate__animated animate__backInLeft" action="controller.php" method="post"  >
            <div class="champ">
                <label for="jour">Jour:   </label>
                <div class="affichErr">
                    <input type="text" id="jour" name="jj" value="<?php if(!isset($_SESSION['error']['jj']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['jj']; else  ?>">
                    <?php 
                        if(isset($_SESSION['err']['jj'])):?>
                        <span style="color:red">&nbsp;&nbsp;&nbsp;<?php echo   $_SESSION['err']['jj'] ?></span>

                    <?php endif?>
                </div>
            </div>

            <div  class="champ">
                <label for="mois">Mois:  </label>
                <div class="affichErr">
                    <input type="text" id="mois" name="mm" value="<?php if(!isset($_SESSION['error']['mm']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['mm']; else  ?>">
                    <?php 
                        if(isset($_SESSION['err']['mm'])):?>
                        <span style="color:red">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['err']['mm'] ?></span>
                    <?php endif?> 
                </div>
            </div>

            <div class="champ">
                <label for="annee">Année: </label>
                <div class="affichErr">
                    <input type="text" id="annee" name="aaaa" value="<?php if(!isset($_SESSION['err']['aaaa']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['aaaa']; else  ?>">
                    <?php 
                        if(isset($_SESSION['err']['aaaa'])):?>
                        <span style="color:red">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['err']['aaaa'] ?></span>

                    <?php endif?>
                </div>
            </div>

            <div >
                <button class="bouton" type="submit" name="valider">Executer</button>
            </div>
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