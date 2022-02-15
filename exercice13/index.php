
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
    <title>Exercice13</title>
</head>
<body>
    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE13</h2>
    <div class="container" >
        <form action="" method="post" style="display:flex; flex-direction: row; justify-content: espace-around;
            align-content: center;">
            <div  class="texte">
                <textarea name="texte" rows="25" cols="75"></textarea><br>
                <button type="submit" name="correction">Correction</button>
            </div><br><br>

            <div style="margin-left:3rem" class="texte">
                <textarea name="corrige" rows="25" cols="75"><?php include("controller.php")?></textarea><br>
                <label for="">Corrigé</label>
            </div>

        </form>  
    </div>

<div class="pagination" style="display: flex;justify-content: space-around;">
    <a href="../exercice12/index.php">
        <button style="font-size:30px">Precedent
            <i class="material-icons"></i>
        </button>
    </a>
    <a href="../exercice14/index.php">
        <button style="font-size:30px">Suivant
            <i class="material-icons"></i>
        </button>
    </a>
</div>
<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>

