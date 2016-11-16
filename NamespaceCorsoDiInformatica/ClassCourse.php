<?php

class ClassCourse {
    private $name;
    private $hours;
    
        public function __construct ($name,$hours){
            $this->name=$name;
            $this->hours=$hours;
        }
        
        public function __toString (){
            return $this->name.$this->hours;
        }
}
