
<link rel="stylesheet" href="../CSS/style.css">

<?php
    require_once('fonction.php');
    echo '<div class="container">';
        if(isset($_POST['valider'])){
            $choix = $_POST['choix'];
            if(strcmp($_POST['choix'],"a")){
                echo'<h1 style="color:white; margin-top:-3rem"> Mois en Francais</h1>';
                echo tabMois($moisFr);
            }else{
                echo'<h1 style="color:white; margin-top:-3rem"> Mois en Anglais</h1>';
                echo tabMois($moisEn);   
            }
           
        }
    echo '</div>';

?>