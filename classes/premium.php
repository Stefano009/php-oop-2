<?php
    require_once 'user.php';
    
    class Premium extends User {
        public $premiumLvl;
        public $code;
        public $expireDate;
        public $backCode;

        // function __construct($_premiumLvl){
            
        //     $this->premiumLvl = $_premiumLvl;
        // }

        public function setPremiumLvl($_premiumLvl){
            $this->premiumLvl = $_premiumLvl;
        }
        
        public function insertCreditCard($_c){
            $this->code = $_c->code;
            $this->expireDate = $_c->expireDate;
            $this->backCode = $_c->backCode;
        }

        public function getSconto() {
            if ($this->premiumLvl === 'Silver'){
                return 80;
            } elseif ($this->premiumLvl === 'Gold') {
                return 65;
            } elseif  ($this->premiumLvl === 'Platinum') {
                return 50;
            }
        }

    }



    // 3 premium lvls, Silver, Gold, Platinum. the better lvl you are the better prices you get
    // i set as private the getPremiumLvl because i only my Premium user should have info about his lvl