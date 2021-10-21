<?php
//use PHPUnit\Framework\TestCase;
require_once('../lib/nusoap.php');
/*
class ContainsTest extends TestCase
{
    public function testFailure($operation)
    {
		$possible_values = array('CapitalCity', 'CountryCurrency', 'CountryIntPhoneCode');
        $this->assertContains($operation, $possible_values, 'invalide operation name');
    }
}

*/
function assert_operation($op){
	if ($op == 'CapitalCity' || $op == 'CountryCurrency' || $op == 'CountryIntPhoneCode' ) {
		return true ;
	}
	else {
	return '';
	}
}

function get_info($country_iso, $operation){
    $result_name = $operation.'Result';
    $error  = '';
	$result = array();
	$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/countryinfoservice.wso?wsdl";
	$is_valid_op = assert_operation($operation);

		if(!$error && $is_valid_op){
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
			    exit();
			}
			 try {
				$result = $client->call($operation, array('sCountryISOCode'=> $country_iso));
				$response = $result[$result_name];
				return $response;
			  }
			  catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}
}

//$r = get_info('TN', 'CountryIntPhoneCode');
//print_r($r);