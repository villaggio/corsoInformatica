<?php
namespace Users;

class Teacher implements Worker{
    
    use DigitalUser;
    
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
            return "nome: ".$this->name."<br>"."eta': ".$this->age."<br>"."email: ".$this->email."<br>"."corso: ".$this->course."<br>";
        }

            public function getCourse(){
                return $this->course;
            }

            public function setCourse(Course $course){
                $this->course=$course;
            }
}
