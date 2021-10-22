<?php
    require_once 'user.php';
    
    class Premium extends user {
        protected $premiumLvl;

        function __construct($_premiumLvl){
            $this->premiumLvl = $_premiumLvl;
        }

        public function setPremiumLvl($_premiumLvl){
            $this->premiumLvl = $_premiumLvl;
        }

        private function getPremiumLvl($_premiumLvl){
            return $this->premiumLvl;
        }

        public function getSconto() {
            if (getPremiumLvl() === 'Silver'){
                return 20;
            } elseif (getPremiumLvl() === 'Gold') {
                return 35;
            } else {
                return 50;
            }
        }

    }



    // 3 premium lvls, Silver, Gold, Platinum. the better lvl you are the better prices you get
    // i set as private the getPremiumLvl because i only my Premium user should have info about his lvl