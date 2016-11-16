<?php
require_once InterfacePerson;

class ClassStudent implements InterfacePerson{
    
    use TraitDigitalUser;
    
    private $name;
    private $age;
    private $courses = array();
    
        public function __construct($name, $age, $email, $courses=[]){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->courses=$courses;
        }
        
        public function __toString(){
            $courses="";
            foreach ($this->courses as $course){
                $courses.=$course;
            }
            return $this->name.$this->age.$this->email.$courses; 
        }
        
            function getName(){
                return $this->name;
            }
            
            function setName($name){
                $this->name=$name;
            }
            
            function getAge(){
                return $this->age;
            }
            
            function setAge($age){
                $this->age=$age;
            }
}
