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
    <title>Exercice7</title>
</head>
<body>

    <?php 
        include('/opt/lampp/htdocs/TP/menu.php'); 
    ?>
    <h2>EXERCICE7</h2>
    <div class="container">
    <?php 
        include_once ('fonction.php');

        if (isset($_POST['valider'])) {
            $jj=$_POST['jj'];
            $mm=$_POST['mm'];
            $aaaa=$_POST['aaaa'];
            $_SESSION['post']=$_POST;
            $tabErr=[];

            validValeur($jj,'jj',$tabErr);
            validValeur($mm,'mm',$tabErr);
            validValeur($aaaa,'aaaa',$tabErr);

            if (count($tabErr)==0) {
                dateSuivant($jj,$mm,$aaaa);
                datePrecedent($jj,$mm,$aaaa);

            } else {
                $_SESSION['err']=$tabErr;

                header('location:index.php'); 
                exit();
            }
            
        
        }else{
        
            header('location:index.php');
            exit();
        }
    ?>
</div>
<?php 
    include('/opt/lampp/htdocs/TP/footer.php'); 
?>
