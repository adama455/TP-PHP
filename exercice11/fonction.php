
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
        }else if ($val<10000) {
            $tabErr[$key]="Veullez saisir une valeur supérieure à 10 000!";
        } else{

        }   
    }

    function nbrPremier($nbr):bool{
        $cpt=0;
        for ($i=1; $i <= $nbr; $i++) { 
            if ($nbr%$i==0) {
                $cpt+=1;
            }
        }
        return $cpt==2;
   
    }

    function tabPremier($nbr):array{
        $tabPrmier=[];
        for ($i=1; $i <= $nbr; $i++) { 
            if (nbrPremier($i)) {
                $tabPrmier[]=$i;  
            }
        }
        return $tabPrmier;
    }
    function moyTab(array $tabPrmier ):float{
        $som=0;
        for ($i=0; $i <count($tabPrmier) ; $i++) { 
            $som=$som+$tabPrmier[$i];
        }
        return $som/count($tabPrmier);

    }
    function inferieurMoy(array $tabPrmier):array{
        $moy= moyTab($tabPrmier);
        $inferieur=[];
        foreach ($tabPrmier as $nbr) {
            if ($nbr<=$moy) {
                $inferieur[]=$nbr;
            }
        }
        return $inferieur;

    }
    function superieurMoy(array $tabPrmier):array{
        $moy= moyTab($tabPrmier);
        $superieur=[];
        foreach ($tabPrmier as $nbr) {
            if ($nbr>=$moy) {
                $superieur[]=$nbr;
            }
        }
        return $superieur;
    }
    function affTab( array $tableau):string{
        // $tabAss=['premier', 'inferieur','superieur'];
        $long=count($tableau);
        $tabAss='<table>';
            for ($i=1; $i <=$long ; $i++) { 
                if ($i%12==1) {
                    $tabAss.='<tr>';
                }
                $tabAss.='<td>'.$tableau[$i-1].'</td>';
                if ($i%12==0) {
                    $tabAss.='</tr>';
                }
            }
        $tabAss.='</table>';
        return $tabAss;
    }





?>