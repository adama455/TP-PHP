<?php

//PROCEDURE "" ou ''=>chaine

    function calculCarre(int $cote):void{
        $peri= $cote*4;
        $surf=$cote*$cote;
        $diag= sqrt(2*pow($cote,2));
        echo "Le Perimetre est ". $peri."<br>";
        echo "La Surface  est $surf <br>";
        echo 'La Diagonale  est '.$diag .'<br>';
    }


//FONCTION

    //Calcul de la fonction perimetre
    function perimetre(int $cote):int{
        return $cote*4;
    }

    //Calcul de la fonction Surface
    function surface(int $cote):int{
        return $cote*$cote;
    }

    //Calcul de la fonction Diagonal
    function diagonal(int $cote):float{
        return sqrt(2*pow($cote,2));
    }
?>