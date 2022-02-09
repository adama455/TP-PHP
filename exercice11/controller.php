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
        <h2>EXERCICE2</h2>
    <div class="container">
        <?php
            include ("fonction.php");
            if (isset($_POST['test'])) {
                $nombre= $_POST['nombre'];
                $_SESSION['post']=$_POST;
                $tabErr=[];
                validValeur($nombre,'nombre',$tabErr);

                if (count($tabErr)==0) {
                    $tab=tabPremier($nombre);
                    echo '<span class="champs-resultat"> Les nombres premier du tableau sont: </span>';
                    echo affTab($tab);
                    echo '<span class="champs-resultat"> La moyenne du tableau est: </span>';
                    echo moyTab($tab);
                    echo '<span class="champs-resultat"> Les nombres inferieur à la moyenne du tableau sont: </span>';
                    echo affTab(inferieurMoy($tab));
                    echo '<span class="champs-resultat"> Les nombres superieur à la moyenne du tableau sont: </span>';
                    echo affTab(superieurMoy($tab));

                    // $tab=tabPremier($nombre);
                    // echo'<h1>Les nombres Premier </h1><br>';
                    // print_r($tab) ;
                    // echo'<h1>Les nombres Premier </h1><br>';
                    // print_r(inferieurMoy($tab));
                    // echo'<h1>Les nombres Premier </h1><br>';
                    // print_r(superieurMoy($tab));
                    
                } else {
                    $_SESSION['err']=$tabErr;
                    header('location:index.php');
                    exit();
                }
                
            } else {
                header('location:index.php');
                exit();
            }
            

        ?>
    </div>   
    <?php 
        include('/opt/lampp/htdocs/TP/footer.php'); 
    ?>