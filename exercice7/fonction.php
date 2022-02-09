<?php


    function estVide($nbre):bool {
        return (empty($nbre));
    }

    function estNbre($val):bool{
        return is_numeric($val);
    }

    function validValeur($val,string $key,array &$tabErr):void{
        if ( estVide($val)) {
            $tabErr[$key]="vide!";
        }else{
            if (!estNbre($val)) {
                $tabErr[$key]="Veullez saisir un nombre svp!";
            }
        }
    }

    function dateSuivant(int $jj,int $mm, int $aaaa):void{


    }

    function datePrecedant(int $jj,int $mm, int $aaaa):void{
    
        
    }
?>
