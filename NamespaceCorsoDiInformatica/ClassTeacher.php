<?php

require_once AbstractWorker;
class ClassTeacher implements AbstractWorker{
    
    use TraitDigitalUser;
    
    private $name;
    private $age;
    private $course;
    
        public function __construct($name, $age, $email, Course $course=null){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->course=$course;
        }

        public function __toString (){
            return $this->name.$this->age.$this->email.$this->course;
        }

            public function getCourse(){
                return $this->course;
            }

            public function setCourse(Course $course){
                $this->course=$course;
            }
}
