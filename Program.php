<?php
namespace Exchange;
include_once 'Data.php';
include_once 'Json.php';
include_once 'GetExchangeRatesResponse.php';
include_once 'CurrencyPair.php';
include_once 'Xml.php';
include_once 'Calculation.php';
include_once 'Write.php';
include_once 'Exchange.php';

$exchange = new Exchange(500, "USD");

$getdatas = new Data("text/xml", $exchange->getCurrencyname());
$comingdatas = $getdatas->getData();
/*
 * JSON
$jsontest = new Json($comingdatas);

$dizi = new GetExchangeRatesResponse();
$dizi = $jsontest->Parser();
*/

$xml = new Xml($comingdatas);
$list = $xml->Parser();

$calculate = new Calculation($exchange->getMoneyvalue(), $list);
$calculateresult = $calculate->Calculator();

//print_r($sonuc);

Write::Printer($calculateresult);

?>