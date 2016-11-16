<?php

namespace Users;

class School {
    private $name;
    private $students = array();
    
        public function __construct($name){
            $this->name=$name;
        }
        
        public function __toString(){
            $stringa="";
            foreach ($this->students as $student){
                $stringa.=$stringa."<br>".$student;
            }
            return "scuola: $this->name<br>studenti:$stringa";
        }
        
            public function addStudent(Student $student){
                array_push ($this->students, $student);
            }
            
            public function getStudents(){
                return $this->students;
            }
}
