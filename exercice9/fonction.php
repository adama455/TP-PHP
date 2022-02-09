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
        echo"<h2>La table de Multiplication de ".$nbr." est:</h2>";
        for ($i=1; $i <=12; $i++) { 
            echo '<div style="font-size:2em;" > '.$nbr.' x '.$i.' = '.$nbr*$i.'</div> '; 
        }
    }

    // function allTable(array $nbr):void{

    //     for ($i=1; $i <=count($nbr); $i++) { 
            
    //         for ($j=1; $j <=12; $j++) { 
    //             echo '<ul><li> '.$i.'x'.$j.'='.$i*$j.'</ul></li> '; 
    //         }
    //     }
    // }



?>