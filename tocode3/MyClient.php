<?php
require_once('lib/nusoap.php');
  $error  = '';
  $result = array();
  $guest= " Web";
  $wsdl = "http://www.dneonline.com/calculator.asmx?wsdl";
    if(!$error){
      //create client object
      $client = new nusoap_client($wsdl, true);
      $err = $client->getError();
      if ($err) {
        echo '<h2>Constructor error</h2>' . $err;
          exit();
      }
       try {
        $result = $client->call('Multiply', array('intA'=> 'aa','intB'=>4));
        echo "<h2>Result<h2/>";
        print_r($result);
        }
        catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
       }
    } 
?>