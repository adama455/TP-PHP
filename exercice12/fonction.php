

<?php
    $moisFr = [
        1 =>'Janvier',
        2 =>'Février',
        3 =>'Mars',
        4 =>'Avril',
        5 =>'Mai',
        6 =>'Juin',
        7 =>'Julliet',
        8 =>'Aout',
        9 =>'Septembre',
        10 =>'Octobre',
        11 =>'Novembre',
        12 =>'Decembre',

    ];
   
    $moisEn = [
        1 =>'January',
        2 =>'Févriary',
        3 =>'Marth',
        4 =>'April',
        5 =>'May',
        6 =>'Jun',
        7 =>'Julliet',
        8 =>'August',
        9 =>'September',
        10 =>'October',
        11 =>'November',
        12=>'December',

    ];

    // function tabMois(array $choixMois):string{
    //     // global $moisFr, $moisEn;
    //     $longTab=count($choixMois);
    //     $tablM ='<table>';
    //         for ($i=1; $i <= $longTab; $i++) { 
    //             if ($i%4==1) { $tablM.='<tr>';}
    //                 $TablM.='<td>'.$choixMois[$i-1].'</td>';
    //             if ($i%4==0) { $tablM.='</tr>';}
    //         }
    //     $tablM.='</table>';
    //     return $tablM;
    // }
    function tabMois(array $choixMois):void {
        global $moisFr, $moisEn;
        $longTab=count($choixMois);
        echo '<table border="2" width="60%">';
            for ($i=0; $i <= $longTab; $i++) { 
                if ($i%4==1) { echo '<tr>';}
                    echo '<td>'.$choixMois[$i].'</td>';
                if ($i%4==0) { echo '</tr>';}
            }
        echo '</table>';   
    }


    
    



?>