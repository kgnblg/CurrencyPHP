<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 21.07.2016
 * Time: 16:36
 */

namespace Exchange;


class Exchange
{
    private $moneyvalue;
    private $currencyname;


    public function __construct($moneyvalue, $currencyname)
    {
        $this->setMoneyvalue($moneyvalue);
        $this->setCurrencyname($currencyname);
    }

    public function getCurrencyname()
    {
        return $this->currencyname;
    }

    public function getMoneyvalue()
    {
        return $this->moneyvalue;
    }

    public function setCurrencyname($currencyname)
    {
        $this->currencyname = $currencyname;
    }

    public function setMoneyvalue($moneyvalue)
    {
        $this->moneyvalue = $moneyvalue;
    }

}