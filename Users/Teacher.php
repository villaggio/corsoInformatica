<?php
namespace Users;

class Teacher extends Worker{
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $course;
    private $company;
    private $school;
    
        public function __construct($name, $age, $email, Course $course=null, School $school=null){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->course=$course;
            $this->school=$school;
        }

        public function __toString (){
            return "nome: ".$this->name."<br>"."eta': ".$this->age."<br>"."email: ".$this->email."<br>"."corso: ".$this->course."<br>".$this->school."<br>";
        }
            public function getCompany(){
                return $this.company;
            }
            
            public function setCompany ($company){
                $this->company=$company;
            }
            
            function getName(){
                return $this->name;
            }
            
            function setName($name){
                $this->name=name;
            }
            
            function getAge(){
                return $this->age;
            }
            
            function setAge($age){
                $this->age=$age;
            }
            
            public function getCourse(){
                return $this->course;
            }

            public function setCourse(Course $course){
                $this->course=$course;
            }
            
            public function getSchool(){
                return $this->school;
            }
            
            public function setSchool(School $school){
                $this->school=$school;
            }
}
