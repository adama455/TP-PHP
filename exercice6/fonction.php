<?php
    function estNombre($nb):bool {
        return is_numeric($nb);
    }

    function estVide($nb):bool {
        return empty($nb);
    }

    function nombreValide($nb,string $key,array &$tabErreur ):void{
        if (estVide($nb)) {
            $tabErreur[$key]= " le champ est vide";
        } else{
            if (!estNombre($nb)) {
                $tabErreur[$key]=" veullez entrer un nombre";
            }
        }
    }
    echo '<div class="solution-exo6>"';
    function equationSecondDegre(int|float $a,int|float $b,int|float $c):void{
        if ($a==0) {
            if ($b!=0) {
            echo "la solustion est: ".((-1)*$c/$b);
            } else {
                echo "Pas de solution!!";
            }
            
        } else {
            $delta= pow($b,2) - 4*$a*$c;
            if ($delta==0) {
                echo 'la solustion est: '.(-1*$b/2*$a) ;       
            } elseif ($delta>0) {
                echo 'les solutions sont:<br> x1= '. (-1*$b-sqrt($delta)/2*$a).' <br> x2= '.(-1*$b+sqrt($delta)/2*$a);
                }else{
                    echo "Impossible!!!";
                } 
        }
        
    }
    echo '</div>';
?>