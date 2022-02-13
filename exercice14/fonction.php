<?php

    // function estNombre($nbre):void{
    //    if (is_int($nbre) && (strlen($nbre)==9)){
    //         echo nl2br($nbre);
    //     } else{
    //         echo 'la saisie est invalide';
    //     }
    // }
    function validate_phone_number($phone)
    {
        $opp=[0,7,8,6,5];
         // Allow +, - and . in phone number
         $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
         // Remove "-" from number
         $phone_to_check = str_replace("-", " ", $filtered_phone_number);
    
         // Check the lenght of number
         // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 9) {
            return false;
        } else{
                for ($i=0; $i <count($opp) ; $i++) { 
                    if (substr($phone,0,strlen($phone)==7)&& substr($phone,1,strlen($phone)==$opp[$i] )) {
                        echo 'saisie valide';
                    }
                }
            }
            return true;
        
            
    }


?>