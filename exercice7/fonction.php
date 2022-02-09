<?php


    function estVide($nbre):bool {
        return (empty($nbre));
    }

    function estNbre($val):bool{
        return is_numeric($val);
    }
    function estEntier($val):bool{
        return is_int($val);

    }

    function validValeur($val,string $key,array &$tabErr):void{
        if ( estVide($val)) {
            $tabErr[$key]="vide!";
        }else{
            if (!estNbre($val) && !estEntier($val)) {
                $tabErr[$key]="Veullez saisir un nombre entier svp!";
            }else{
                if ($val<1) {
                    $tabErr[$key]="veillez saisir un nombre positive";
                }
            }
        }
    }

    function dateSuivant(int $jj,int $mm, int $aaaa):void{


    }

    function datePrecedant(int $jj,int $mm, int $aaaa):void{
    
        
    }
?>
