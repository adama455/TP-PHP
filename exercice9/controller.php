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
    <h2>EXERCICE7</h2>
    <div class="container">
        <?php
        include ("fonction.php");
    
        if (isset($_POST['test'])) {
            $nombre= $_POST['nombre'];
            $_SESSION['post']=$_POST;
            $tabErr=[];
            validValeur($nombre,'nombre',$tabErr);
            
            if (count($tabErr)==0) {?>
                
                <div class="aff-resultat" style=" width: 100%; color:white;height: auto;margin: auto;text-align:center;background-color:green;">
                    <?php affichVal($nombre);?>
                </div>
                
            <?php } else {
                $_SESSION['err']=$tabErr;
                header('location:index.php');
                exit();
            }
            
        } else {
            header('location:index.php');
            exit();
        }
        
        // $nombres=[1,2,3,4,5,6,7,8,9,10,11,12];
        // allTable($nombres);
    ?>
    </div>
<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>