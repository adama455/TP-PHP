<?php 
    function estVide($val):bool {
        return empty($val);
    }
    function estNbre($val):bool{
        return is_numeric($val);
    }
    
    function validValeur($val,string $key,array &$tabErr):void{
        if (estVide($val)) {
            $tabErr[$key]="vide!";
        }else if (!estNbre($val)) {
            $tabErr[$key]="Veullez saisir un nombre svp!";
        }else if($val<=0) {
            $tabErr[$key]="Veullez saisir un nombre positif!";
        }
        
    }
    function affichVal($nbr):void{
        echo "<h2>les valeurs de 1 à  ".$nbr." sont:</h2>";
        echo '<ul style="font-size:2em;">';
            for ($i=1; $i <=$nbr; $i++) { 

                echo '<li> '.$i.'</li> '; 
            }
        echo "</ul>";

    }


?>