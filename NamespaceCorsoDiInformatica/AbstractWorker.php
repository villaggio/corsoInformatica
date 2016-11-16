<?php
require_once "InterfacePerson.php";
abstract class AbstractWorker implements InterfacePerson{
    private $company;
    
    public function getCompany(){
        return $this->company;
    }
    
    protected function setCompany($company){
        $this->company=$company;
    }
} 

