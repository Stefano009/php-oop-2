<?php

Class CreditCard {
    public $code;
    public $expireDate;
    public $backCode;

    function __construct($_code, $_expireDate, $_backCode){
        if(is_numeric($_code) && strlen((string)$_code) == 12){
            $this->code = $_code;
        } else {
            throw new Exception ('la sua carta di credito non è stata riconosciuta, la reinserisca');
        }
        if($_expireDate > date("Y-m")){
            $this->expireDate = $_expireDate;
        } else {
            throw new Exception ('la sua carta è scaduta, provi ad inserirne un\'altra');
        }
        if (is_numeric($_backCode) && strlen((string)$_backCode) == 3){
            $this->backCode = $_backCode;
        } else {
            throw new Exception ('il suo CCV è errato');
        }

    }
}

