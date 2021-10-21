<?php 
require_once('../lib/nusoap.php');
require ('country.php');

//$server=new nusoap_server($wsdl ='country_sd.wsdl');




$server = new SoapServer("country_sd.wsdl"); 

$server->setClass('Country');
$server->addFunction('get_information');
/*
$server->register('get_information',
      array('isoCode' => 'xsd:string', 'op' => 'xsd:string'),  
      array('result' => 'xsd:string'),
      );
*/
$server->handle();
?>