<?php

trait TraitDigitalUser{
    private $email;
    
        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email=$email;
        }
}
