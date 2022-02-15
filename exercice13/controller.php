<?php
    include ('fonction.php');
    if (isset($_POST['correction'])) {

        $texte=$_POST['texte'];

        espaceIni($texte);  
        wordwrap($texte, 25, "\n");
        str_replace(array('#', "'", ";","&","-",'"',"(", '{','[',']','}','@',')','!','^','=','+','~','*','%','$','£','µ','¨'),' ', $texte);
        ucfirst($texte);
           
    }

?>