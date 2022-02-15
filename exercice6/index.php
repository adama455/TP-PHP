<?php
    session_start();
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
    <title>Exercice6</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE6</h2>

    <div class="equation"><h2 class="animate__animated animate__zoomIn animate__repeat-2">EQUATION DU 2nd DEGRE</h2 ></div>
    <div class="container">
    <form class="formulaire" action="controller.php" method="post" >
        <table class="tableau">
        <tr>
            <td class="libel"> <h2 class="animate__animated animate__slideInDown animate__repeat-2"> Renseignez les données ci-dessous:</h2><br /><br /></td>
        </tr>
        <tr>
            <td class="coef"> AX²</td>
            <td class="champ" style="width:65%"><b><label for="nombre_a" class="nbre">A = </label></b><input type="text" id="nombre_a"  name="a" value="<?php if(!isset($_SESSION['err']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"> &nbsp;&nbsp;
                <!-- //affichage de l'erreur du nombre a -->
                <?php 
                    if(isset($_SESSION['erreur']['a'])):?>
                    <span style="color:red"><?php echo '  <i class="fas fa-exclamation" style="font-size:15px;color:red">'.$_SESSION['erreur']['a'] .'</i>' ?></span>
                <?php endif?>
            </td>
        </tr>
        <tr>
            <td class="coef"> BX</td>
            <td class="champ" style="width:65%"><b><label for="nombre_b" class="nbre">B = </label></b><input type="text" id="nombre_b"  name="b" value="<?php if(!isset($_SESSION['err']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>"> &nbsp;&nbsp;
                    <!-- //affichage de l'erreur du nombre a -->
                <?php 
                    if(isset($_SESSION['erreur']['b'])):?>
                    <span style="color:red"><?php echo '  <i class="fas fa-exclamation" style="font-size:15px;color:red">'.$_SESSION['erreur']['b'] .'</i>' ?></span>

                <?php endif?>
            </td>
        </tr>
        <tr>
            <td class="coef"> C</td>
            <td class="champ" style="width:65%"><b><label for="nombre_c" class="nbre">C = </label></b><input type="text" id="nombre_c"  name="c" value="<?php if(!isset($_SESSION['err']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>"> &nbsp;&nbsp;
                <!-- //affichage de l'erreur du nombre a -->
                <?php 
                    if(isset($_SESSION['erreur']['c'])):?>
                    <span style="color:red"><?php echo '<i class="fas fa-exclamation" style="font-size:15px;color:red">'.$_SESSION['erreur']['c'] .'</i>' ?></span>
                <?php endif?>

            </td>
        </tr>
        <tr>
            <td><button class="valid"  type="submit" name="valider">Calculer</button></td>
        </tr>
    </table>
       
    </form>
   
    <?php 
        if(isset($_SESSION['erreur']))
            {
                unset($_SESSION['erreur']);
            }
    ?>    
</div> 

    <div class="pagination" style="display: flex;justify-content: space-around;">
        <a href="../exercice5/index.php">
            <button style="font-size:30px">Precedent
                <i class="material-icons"></i>
            </button>
        </a>
        <a href="../exercice7/index.php">
            <button style="font-size:30px">Suivant
                <i class="material-icons"></i>
            </button>
        </a>
    </div>


<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>

