<?php 

    // require_once ('../data/stacks.php');
    class Product {
        public $name;
        public $price;
        public $productPhoto;
        // public $productId;

        function __construct($_productId){
            // $this->productId = $_productId;
            $this->getProduct($_productId);
        }
        
        public function getProduct($_productId) {
            if($_productId == 'GII32NJT7XA'){
                $this->name = 'Processore AMD Ryzen 5 5600X (6C/12T, 35MB di cache, fino a 4,6 GHz Max Boost)';
                $this->price = 296.50;
                $this->productPhoto = 'processore';
            } 
            elseif ($_productId == 'TTB17LMD4XC') {
                $this->name = 'Megaport PC-Gaming Intel Core i7-11700F • GeForce RTX 3060Ti 8GB • 16 GB DDR4 • 480GB SSD • 1TB HDD • Windows 10 • WelseiFi • PC da gaming';
                $this->price = 1.699;
                $this->productPhoto = 'tower';
            } 
            elseif ($_productId == 'MIK34NCF7GK'){
                $this->name = 'Sharp Aquos 40BL6E - 40" Smart TV 4K Ultra HD';
                $this->price = 428.90;
                $this->productPhoto = 'monitor';
            }
            elseif ($_productId == 'KSQ14YKW7EP') {
                $this->name = 'HUAWEI MateBook D15 Laptop, 15.6 Pollici';
                $this->price = 549.00;
                $this->productPhoto = 'notebook';
            }
            elseif ($_productId == 'IBH13JLH4FN') {
                $this->name = 'HP - Server Enterprise ProLiant, Micro-server 3,4 GHz - E-2224-16 GB - 2 x 1 TB';
                $this->price = 643.89;
                $this->productPhoto = 'server';
            }
        }
    }
