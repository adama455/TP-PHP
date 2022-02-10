
<link rel="stylesheet" href="../CSS/style.css">  
<?php 
    session_start();
    echo '<h2>RESULTAT</h2><br><div class="container" style="font-size: 2rem;">';
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
    echo '</div>';
?>

