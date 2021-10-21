<?php
require_once('../lib/nusoap.php');


$error  = '';
    $country_iso = 'TN'; //readline('Enter the ISO country code: ');
	$op = 'CapitalCity';
	$result = array();
	$guest= " Web";
	$wsdl = "http://localhost/to_code3_2/WS1/country_info_service.php?wsdl";
		if(!$error){
			//create client object
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
			    exit();
			}
			 try {
				$result = $client->call('get_info', array('isoCode'=> $country_iso, 'op'=>$op));
                echo $result;
			  }
			  catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}
?>