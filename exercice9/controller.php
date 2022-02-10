
<link rel="stylesheet" href="../CSS/style.css">
<?php
    session_start();
    echo '<h2>RESULTAT</h2><br><div class="container" style="font-size: 2rem;">';
        include ("fonction.php");

        if (isset($_POST['test'])) {
            $nombre= $_POST['nombre'];
            $_SESSION['post']=$_POST;
            $tabErr=[];
            validValeur($nombre,'nombre',$tabErr);
            
            if (count($tabErr)==0) {?>
                
                <?php affichVal($nombre);?>
                
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
    echo '</div>';
?>
