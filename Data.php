<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 21.07.2016
 * Time: 12:48
 */

namespace Exchange;

class Data
{
    private $resulttype;
    private $currencytype;

    public function __construct($resulttype, $currencytype)
    {
        $this->setCurrencytype($currencytype);
        $this->setResulttype($resulttype);
    }

    public function setCurrencytype($currencytype)
    {
        $this->currencytype = $currencytype;
    }

    public function getCurrencytype()
    {
        return $this->currencytype;
    }

    public function getResulttype()
    {
        return $this->resulttype;
    }

    public function setResulttype($resulttype)
    {
        $this->resulttype = $resulttype;
    }

    public function getData()
    {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2F1dGgucGF4aW11bS5jb20iLCJhdWQiOiJodHRwczovL2FwaS5wYXhpbXVtLmNvbSIsIm5iZiI6MTQ2ODMxMDQ5MiwiZXhwIjoxNDcyNjg4MDAwLCJzdWIiOiI0MzZiYWYwNy01ZTRmLTQyMDEtYjBlNS01Njk3NzUyZGI3NmUiLCJyb2xlIjoicGF4OmRldmVsb3BlciJ9.jnHkmkXThdVZAwzr38lgqi3ZnnXEM3fpY-XeZsQyfnw";
        $url = "http://api.dev.paximum.com/v1/currency/GetExchangeRates?basecurrency=".$this->getCurrencytype()."&access_token=".$token;

        $curlconnection = curl_init();
        curl_setopt($curlconnection, CURLOPT_URL, $url);
        curl_setopt($curlconnection, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlconnection, CURLOPT_HTTPHEADER, array('Accept: '.$this->getResulttype()));
        $result = curl_exec($curlconnection);
        curl_close($curlconnection);

        return $result;
    }
}
?>