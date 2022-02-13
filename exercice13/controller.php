<?php
    include ('fonction.php');

    if (isset($_POST['correction'])) {
        $texte=$_POST['texte'];
        echo '<div><textarea name="correcTexte" rows="40" cols="95">';
            // echo espaceChaine($texte);    
            echo espaceIni($texte) ;  
            echo pointfinal($texte); 
            echo preMaj($texte);
            // echo wordwrap($texte,25);
        echo '</textarea></div>';
            


        
    }

?>