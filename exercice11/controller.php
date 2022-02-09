<?php
    session_start();
    include ("fonction.php");
    if (isset($_POST['test'])) {
        $nombre= $_POST['nombre'];
        $_SESSION['post']=$_POST;
        $tabErr=[];
        validValeur($nombre,'nombre',$tabErr);

        if (count($tabErr)==0) {
            $tab=tabPremier($nombre);
            echo'<h1>Les nombres Premier </h1><br>';
            var_dump($tab) ;
            echo'<h1>Les nombres Premier </h1><br>';
            var_dump(inferieurMoy($tab));
            echo'<h1>Les nombres Premier </h1><br>';
            var_dump(superieurMoy($tab));
            
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