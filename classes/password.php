<?php

    trait Password {
        private $password;

        function __construct($_password){
            if (strlen($_password) > 6 && preg_match('/[a-zA-Z]/', $_password) && preg_match('/\d/',$_password) && preg_match('/[^a-zA-Z\d]/', $_password))
            {
                $this->password = $_password;
            }
            else {
                throw new Exception('your password is not correct');
            }
        }
    }