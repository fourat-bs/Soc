<?php
require_once('../lib/nusoap.php');
require('../WS2/client.php');

$server=new nusoap_server();

/*
function get_capital($country_iso){
    $error  = '';
	$result = array();
	$guest= " Web";
	$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/countryinfoservice.wso?wsdl";
		if(!$error){
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
			    exit();
			}
			 try {
				$result = $client->call('CapitalCity', array('sCountryISOCode'=> $country_iso));
				return $result['CapitalCityResult'];
			  }
			  catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}
}
function get_currency($country_iso){
    $error  = '';
	$result = array();
	$guest= " Web";
	$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/countryinfoservice.wso?wsdl";
		if(!$error){
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
			    exit();
			}
			 try {
				$result = $client->call('CountryCurrency', array('sCountryISOCode'=> $country_iso));
				return serialize($result['CountryCurrencyResult']);
			  }
			  catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}
}
function get_phone_code($country_iso){
    $error  = '';
	$result = array();
	$guest= " Web";
	$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/countryinfoservice.wso?wsdl";
		if(!$error){
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
			    exit();
			}
			 try {
				$result = $client->call('CountryIntPhoneCode', array('sCountryISOCode'=> $country_iso));
				return $result['CountryIntPhoneCodeResult'];
			  }
			  catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}
}

*/


$server->configureWSDL('country info service','urn:country');

$server->register('get_info',
      array('country_iso' => 'xsd:string', 'operation' =>'xsd:string'),  
      array('response' => 'xsd:string'),
      );  
/*
$server->register('get_currency',
      array('country_iso' => 'xsd:string'),  
      array('currency' => 'xsd:string'),  
      );

$server->register('get_phone_code',
      array('country_iso' => 'xsd:string'),  
      array('phone_code' => 'xsd:string'), 
      );
*/

$server->service(file_get_contents("php://input"));
