<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 21.07.2016
 * Time: 13:03
 */

namespace Exchange;
include_once 'GetExchangeRatesResponse.php';
include_once 'CurrencyPair.php';

class Json
{
    public $currencylistdata;

    public function __construct($currencylistdata)
    {
        $this->currencylistdata = $currencylistdata;
    }

    public function Parser()
    {
        $parser = array();
        $parser = json_decode($this->currencylistdata, true);
        $parser = $parser["currencyPairs"];

        $getlist = new GetExchangeRatesResponse();

        for($i = 0; $i < count($parser); $i++)
        {
            $basecurrency = $parser[$i]["baseCurrency"];
            $countercurrency = $parser[$i]["counterCurrency"];
            $rate = $parser[$i]["rate"];

            $getlist->CurrencyPairs[$i] = new CurrencyPair($basecurrency, $countercurrency, $rate);
        }

        return $getlist;
    }
}
?>