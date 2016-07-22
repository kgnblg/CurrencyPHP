<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 21.07.2016
 * Time: 16:38
 */

namespace Exchange;
include_once 'GetExchangeRatesResponse.php';
include_once 'CurrencyPair.php';

class Calculation
{
    public $moneyamount;
    public $currencylist;

    public function __construct($moneyamount, $currencylist)
    {
        $this->moneyamount = $moneyamount;
        $this->currencylist = $currencylist;
    }

    public function Calculator()
    {
        $getcurrencypairs = new GetExchangeRatesResponse();
        $getcurrencypairs = $this->currencylist;
        $calculationresults = array();
        for($i = 0; $i < count($getcurrencypairs->CurrencyPairs); $i++)
        {
            $getmoney = $getcurrencypairs->CurrencyPairs[$i]->getCounterCurrency();
            $getrate = $getcurrencypairs->CurrencyPairs[$i]->getRate();

            $calculationresults[$i] = $getmoney." ".$getrate*$this->moneyamount;
        }

        return $calculationresults;
    }
}