<?php
require_once('../lib/nusoap.php');


$error  = '';
$country_iso = 'TN';
$op = 'CapitalCity';
$result = array();
$wsdl = "http://localhost/to_code3_2/WS-TD/wstd_service.php?wsdl";
	if(!$error){
		$client = new nusoap_client($wsdl, true);
		$err = $client->getError();
		if ($err) {
			echo '<h2>Constructor error</h2>' . $err;
			exit();
		}
		try {
			$result = $client->call('get_information', array('isoCode'=> $country_iso, 'op'=> $op));
            print_r($result);
		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
?>