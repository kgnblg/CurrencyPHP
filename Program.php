<?php
namespace Exchange;
include_once 'Data.php';
include_once 'Json.php';
include_once 'GetExchangeRatesResponse.php';
include_once 'CurrencyPair.php';
include_once 'Xml.php';
include_once 'Calculation.php';

$getdatas = new Data("text/xml", "USD");
$comingdatas = $getdatas->getData();
/*
 * JSON
$jsontest = new Json($comingdatas);

$dizi = new GetExchangeRatesResponse();
$dizi = $jsontest->Parser();
*/

$xml = new Xml($comingdatas);
$dizi = $xml->Parser();

$albak = new Calculation(500,$dizi);
$sonuc = $albak->Calculator();

print_r($sonuc);

?>