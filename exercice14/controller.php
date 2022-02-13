<?php
    include ('fonction.php');

    if (isset($_POST['correction'])) {
        $texte=$_POST['texte'];
        $numValide="";
        $numNonValide="";

        
            if (validate_phone_number($texte) == true) {
                $numValide =$texte;
            } else {
                $numNonValide= $texte;
            }
        
        
            
            


        
    }

?>