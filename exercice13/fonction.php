<?php
    function espaceIni($texte){
        return preg_replace('/\s+/', ' ',trim($texte) );
        
    }
    function decoupTexte($texte){
        return wordwrap($texte, 25, "\n");

    }

    // function correctTexte($texte){
    // $str=str_replace(array('#', "'", ";","&","-",'"',"(", '{','[',']','}','@',')','!','^','=','+','~','*','%','$','£','µ','¨'),' ', $texte);
    // if (espaceIni($texte) && decoupTexte($texte)&&$str ) {
    //         echo $texte;
    //     }
    // }
    // ucfirst($texte);

    // str_replace(array('#', "'", ";","&","-",'"',"(", '{','[',']','}','@',')','!','^','=','+','~','*','%','$','£','µ','¨'),' ', $texte);
   


    // function remove_sp_chr($str)
    // {
    //     $result = str_replace(array("#", "'", ";"), '', $str);
    //     return $result;
    // }

    
?>  