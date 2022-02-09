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
        echo'<h2>Les '.$nbr.' champs inputs sont:</h2>';
        for ($i=1; $i <=$nbr; $i++) { 
            echo '<form><input type="text" style="width:25vw;height:6vh;"></form> '; 
        }
    }

?>