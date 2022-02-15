<?php

    function validate_phone_number($phone)
    {
            $opp=[70,77,78,76,75];
         $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
         
         $phone_to_check = str_replace("-", "", $filtered_phone_number);
    
         // Check the lenght of number
    
         if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 9) {
            return false;
        } else {
                 for ($i=0; $i < count($opp); $i++) { 
                 if (preg_match("#^$opp#",$phone)) {
                    return true;
                }
            }
           
        }
    }


?>