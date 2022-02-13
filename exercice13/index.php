
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
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
            <div>
                <textarea name="texte" rows="35" cols="75"></textarea><br>
                <button type="submit" name="correction">Correction</button>
            </div><br><br>

            <div style="margin-left:3rem">
                <?php
                    include("controller.php");
                ?>
                <label for="">Corrigé</label>
            </div>
        </form>
    </div>
<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>

