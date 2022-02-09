<link rel="stylesheet" href="/CSS/style.css">
<?php
    include ("fonction.php");
    session_start();
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