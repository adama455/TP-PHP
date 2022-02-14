
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
    <title>Exercice14</title>
</head>
<body>
    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE12</h2>
    <div class="container" >
        <form action="" method="post" style="display:flex; flex-direction: row;">
            <div>
                <textarea name="texte" rows="25" cols="65"></textarea>
                <button type="submit" name="correction">Correction</button>
            </div><br><br>
            
            <div>
                <textarea name="numValide" rows="25" cols="65" valu="<?php echo $texte?>">
                    <?php echo $numValide ?>
                </textarea>
                <label for="">Correcte</label>
            </div>
            <div>
                <textarea name="numNonValide" rows="25" cols="65" valu="<?php echo $texte?>">
                    <?php echo $numNonValide ?>
                </textarea>
                <label for="">Incorrecte</label>
            </div>
        </form>   
    </div>
    <?php 
        include('/opt/lampp/htdocs/TP/footer.php'); 
    ?>





   