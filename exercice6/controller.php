
    <link rel="stylesheet" href="../CSS/style.css">
    <?php 
        // include('/opt/lampp/htdocs/TP/menu.php');  
        include ('fonction.php'); 
        session_start(); 
        echo '<h2>SOLUSTION</h2><br><div class="container" style="font-size: 2rem;">';
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
        echo '</div>'
    ?>
