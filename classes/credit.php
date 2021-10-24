<?php

Class Credit {
    public $code;
    public $expireDate;
    public $backCode;

    function __construct($_code, $_expireDate, $_backCode){
        if(is_numeric($_code) && strlen((string)$_code) == 12){
            $this->code=$_code;
        }
        if($_expireDate <= date("Y/m")){
            $this->expireDate = $_expireDate;
        }
        if (is_numeric($_backCode) && strlen((string)$_backCode) == 3){
            $this->backCode = $_backCode;
        }

    }
}

