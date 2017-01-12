<?php
$login = "6dd490faf9cb87a9862245da41170ff2";
$tranKey = "024h1IlD";
$seed = date('c');
$tranKey = sha1( $seed. $tranKey );

$servicio = "https://test.placetopay.com/soap/pse/?wsdl"; //url del servicio
$parametros=array(); //parametros de la llamada

$parametros['auth']= array(
	"login"=>$login,
	"tranKey"=>$tranKey,
	"seed"=>$seed
);


$client = new SoapClient($servicio, $parametros);
//var_dump($client);

$result = $client->getBankList($parametros);//llamamos al métdo que nos interesa con los parámetros
var_dump($result);
print_r($result);