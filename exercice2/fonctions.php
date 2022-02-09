<?php
//PROCEDURE
function calculRectangle(int $long,int $larg){ 
    $peri= ($long +$larg)*2;
    $surf=($long * $larg);
    $diag=sqrt(pow($long,2)+pow($larg,2));
    echo "Le périmetre du rectangle est: ".$peri."<br>";
    echo "La surface du rectangle est: ".$surf."<br>";
    echo "Le diagonal du rectangle est: ".$diag."<br>";
}

//FONCTION
    function perimetre_rect(int $long,int $larg):int{ 
        return ($long+$larg)*2;
    }

    function surface_rect(int $long,int $larg):int{
        return ($long*$larg);
        
    }

    function diagonal_rect(int $long,int $larg):float{
        return sqrt(pow($long,2)+pow($larg,2));
       
    }

?>