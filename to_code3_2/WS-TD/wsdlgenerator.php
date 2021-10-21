<?php
//C:\MAMP\htdocs\to_code3_2\WS-TD\vendor\php2wsdl\php2wsdl\src\PHPClass2WSDL.php
require('vendor/php2wsdl/php2wsdl/src/PHPClass2WSDL.php');
require('vendor/autoload.php');
require('country.php');

$class = 'Country';
$serviceURI = 'http://localhost/to_code3_2/WS-TD/wstd_service.php';
$file = 'country_sd.wsdl' ;
$wsdlGenerator = new PHP2WSDL\PHPClass2WSDL($class, $serviceURI);
$wsdlGenerator->generateWSDL();
file_put_contents($file, $wsdlGenerator->dump());
?>