<?php


    function validValeur(int $jj,int $mm,int $aaaa, string $key,array &$tabErr):void{
        if (dateValide($mm,$aaaa ,$jj)) {
            $tabErr[$key]="veullez entrer une date valide";
            // }else{
            // if (!estNbre($val) && !estEntier($val)) {
            //     $tabErr[$key]="Veullez saisir un nombre entier svp!";
            // }else{
            //     if ($val<1) {
            //         $tabErr[$key]="veillez saisir un nombre positive";
            //     }
            // }
        }
    }

    function nbreDeJour(int $mm,int $aaaa ,int $jj):int{
        if ($mm>12 || $mm<1 || $aaaa<0) {
            $jj=-1;
        }
        if ($mm=2) {
            if (($aaaa%4==0 && $aaaa%100!=0)||($aaaa%400==0)) {
               $jj=29;
            }
            $jj=28;
        }
        if ($mm==1 || $mm==3 || $mm==5 || $mm==7 || $mm==8 ||$mm==10 || $mm==12) {
            $jj=31;
        }else{
            $jj=30;
        }
        return $jj;

    }
    function dateValide(int $mm,int $aaaa ,int $jj):bool{ 
        return $jj>=1 && $jj<=nbreDeJour($mm,$aaaa ,$jj);
    }

    function dateSuivant(int $jj,int $mm, int $aaaa):void{
        if (dateValide($mm,$aaaa ,$jj)) {
            if ($jj==nbreDeJour($mm,$aaaa ,$jj)) {
                $jj=1;
               if ($mm==12) { 
                   $mm=1;
                   $aaaa+=1;
                }else {
                   $mm+=1;
                }
            }else{
                $jj+=1;
            }
        }

        echo "la date suivante est: ".$jj."/".$mm."/".$aaaa;

    }

    function datePrecedant(int $jj,int $mm, int $aaaa):void{
        if (dateValide($mm,$aaaa ,$jj)) {
            if ($jj==1) {
                $jj=nbreDeJour($mm,$aaaa ,$jj);
                if ($mm==1) {
                    $jj=1;
                    $m=12;
                    $aaaa-=1;
                }else{
                    $mm-=1;
                }
            }else{
                $jj-=1;
            }
        }
        echo "la date precedante est: ".$jj."/".$mm."/".$aaaa;
        
    }

    var_dump(datePrecedant(20,04,2022));

?>
