<?php
//fonction
    function somme(int $nbre1,int $nbre2):int{ 
        return $nbre1+$nbre2;
    }

    function exposent(int $nbre1,int $nbre2){
        return pow($nbre1,$nbre2);
        
    }

    function difference(int $nbre1,int $nbre2) {
        return $nbre1-$nbre2;
    }

    function produit(int $nbre1,int $nbre2){ 
        return $nbre1*$nbre2;
        
    }

    function modulo(int $nbre1,int $nbre2){
        return $nbre1%$nbre2;
        
    }

    function division(int $nbre1,int $nbre2){
        return $nbre1/$nbre2;    
    }

    function carre(int $nbre1,int $nbre2):void{
       $carreN1=pow($nbre1,2);
       $carreN2=pow($nbre2,2);
       echo "nbre1= ". $carreN1 ."<br>";
       echo "nbre2= ".$carreN2;


        
    }






?>