<?php
require ('../WS2/client.php');

class Country {


    public function get_information($country_iso, $operation){
        
        $result = get_info($country_iso, $operation);
        return $result;

    }
    
}

?>