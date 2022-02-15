
<?php
    include("controller.php");
?>

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
    <title>Exercice14</title>
</head>
<body>
    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE14</h2>
    <div class="container" >
        <form action="" method="post" style="display:flex; flex-direction: row;">
            <div>
                <textarea name="texte" rows="25" cols="65"></textarea>
                <button type="submit" name="correction">Correction</button>
            </div><br><br>
            
            <div>
                <textarea name="numValide" rows="25" cols="65" valu="<?php echo $texte;?>"><?php echo $numValide ?></textarea>
                <label for="">Correcte</label>
            </div>
            <div>
                <textarea name="numNonValide" rows="25" cols="65" valu="<?php echo $texte;?>"><?php echo $numNonValide ?></textarea>
                <label for="">Incorrecte</label>
            </div>
        </form>   
    </div>

<div class="pagination" style="display: flex;justify-content: space-around;">
    <a href="../exercice13/index.php">
        <button style="font-size:30px">Precedent
            <i class="material-icons"></i>
        </button>
    </a>
    <a href="../exercice15/index.php">
        <button style="font-size:30px">Suivant
            <i class="material-icons"></i>
        </button>
    </a>
</div>
<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>





