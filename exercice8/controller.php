<?php
    include ("fonction.php");
    session_start();

    if (isset($_POST['test'])) {
        $nombre= $_POST['nombre'];
        $_SESSION['post']=$_POST;
        $tabErr=[];
        validValeur($nombre,'nombre',$tabErr);

        if (count($tabErr)==0) {
           affichVal($nombre);
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