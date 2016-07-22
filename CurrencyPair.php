<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 21.07.2016
 * Time: 10:34
 */

namespace Exchange;

class CurrencyPair
{
    private $BaseCurrency;
    private $CounterCurrency;
    private $Rate;

    public function __construct($BaseCurrency, $CounterCurrency, $Rate)
    {
        $this->setBaseCurrency($BaseCurrency);
        $this->setCounterCurrency($CounterCurrency);
        $this->setRate($Rate);
    }

    public function getBaseCurrency()
    {
        return $this->BaseCurrency;
    }

    public function getCounterCurrency()
    {
        return $this->CounterCurrency;
    }

    public function getRate()
    {
        return $this->Rate;
    }

    public function setBaseCurrency($BaseCurrency)
    {
        $this->BaseCurrency = $BaseCurrency;
    }

    public function setCounterCurrency($CounterCurrency)
    {
        $this->CounterCurrency = $CounterCurrency;
    }

    public function setRate($Rate)
    {
        $this->Rate = $Rate;
    }
}
?>