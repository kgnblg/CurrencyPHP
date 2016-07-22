<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 21.07.2016
 * Time: 15:10
 */

namespace Exchange;


class Xml
{
    public $currencylistdata;

    public function __construct($currencylistdata)
    {
        $this->currencylistdata = $currencylistdata;
    }

    public function Parser()
    {
        $xml = new \SimpleXMLElement($this->currencylistdata);

        $getlist = new GetExchangeRatesResponse();

        for($i = 0; $i < $xml->CurrencyPairs->CurrencyPair->count(); $i++)
        {
            $basecurrency = $xml->CurrencyPairs->CurrencyPair[$i]->BaseCurrency;
            $countercurrency = $xml->CurrencyPairs->CurrencyPair[$i]->CounterCurrency;
            $rate = $xml->CurrencyPairs->CurrencyPair[$i]->Rate;

            $getlist->CurrencyPairs[$i] = new CurrencyPair($basecurrency, $countercurrency, $rate);
        }

        return $getlist;
    }
}