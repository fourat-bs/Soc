<?php
require_once('')
ini_set("soap.wsdl_cache_enabled","0");
class Country
{
	public $name;
	public $capital;
    public $currency;
    public $phone_code;
    function _construct($name){
        $this->name = $name
    }

    function get_capital($name){
	    //caling remote service
        return $this->capital
    }
    function get_currency($name){
        //caling remote service
        return $this->currency
    }
    function get_phone_code($name){
        //caling remote service
        return $this->phone_code
    }
}
$server=new SoapServer("service_description.wsdl",[
	'classmap'=>[
		'country'=>'Country', 
	]
]);
$server->addFunction('Country->get_capital');
$server->addFunction('Country->get_currency');
$server->addFunction('Country->get_phone_code');
$server->handle();
