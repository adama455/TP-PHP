<?php    
            
    function permutation(int $nbr1,int $nbr2):void{
        $tmp=$nbr2;
        $nbr2=$nbr1;
        $nbr1=$tmp;
        echo "Apres permutation le Nbre1 et Nbre2 sont respectivement: ".$nbr1." et ".$nbr2;
       
       
    } 
?>
