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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Exercice6</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php');    
    ?>
    <h2>EXERCICE6</h2>
    <div class="container ">
        <div class="solution">
        <?php

            include ('fonction.php');

            if (isset($_POST['valider'])) {
                $a= $_POST['a'];
                $b= $_POST['b'];
                $c= $_POST['c'];
                $_SESSION['post']=$_POST;
                $tabErreur= [];
            //L'appel de la fonction nombreValide
                nombreValide($a,'a',$tabErreur);
                nombreValide($b,'b',$tabErreur);
                nombreValide($c,'c',$tabErreur);
                if(count($tabErreur)==0){ //Si il n'ya pas d'erreur dans le tableau taberreur

                    equationSecondDegre($a,$b,$c);//calcul l'equation du second degré
        
                } else{//s'il ya erreur dans le tableau
                    $_SESSION['erreur']=$tabErreur; //on les mets dans la Session
                    //var_dump( $_SESSION);
                    header('location:index.php'); 
                    exit();
                }
                
            }
            else{
                //Redirection vers l'index
                header('location:index.php');
                exit();
            }    

        ?>
    </div>
</div>
 <?php 
        include('/opt/lampp/htdocs/TP/footer.php'); 
?>