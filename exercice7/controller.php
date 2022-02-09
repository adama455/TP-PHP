<?php 
    include_once ('fonction.php');
    session_start();

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