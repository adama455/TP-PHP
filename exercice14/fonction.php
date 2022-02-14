<?php

    function validate_phone_number($phone)
    {
        $opp=[0,7,8,6,5];
         $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
         
         $phone_to_check = str_replace("-", "", $filtered_phone_number);
    
         // Check the lenght of number
    
         if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 9) {
            return false;
         } else {
                if (substr($phone,0,strlen($phone)==7) && substr($phone,1,strlen($phone)==$opp[$i])) {
                    
                }
           return true;
         }
    }


?>