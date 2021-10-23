<?php
    class User {
        public $name;
        public $lastname;
        public $username;
        public $email;
        
        // function __construct($_name, $_lastname, $_username, $_email) {
        //     $this->$name = $_name;
        //     $this->$lastname = $_lastname;
        //     $this->$username = $_username;            
        //     $this->email = $_email;
        // }

        public function setUsername($_username){
            $this->$username =  $_username;
        }

        public function getName() {
            return $this->name;
        }
        
        public function getLastname() {
            return $this->lastname;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getEmail() {
            return $this->email;
        }
    }

    //ho messo solo una function set perchè una volta immesso il nome del mio user non potrà essere cambiato(come in un qualsiasi sito di vendita online)
