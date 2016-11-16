<?php
namespace Users;

class Teacher extends Worker{
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $course;
    private $company;
    private $school;
    
        public function __construct($name, $age, $email, Course $course=null, School $school=null, $company=null){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->course=$course;
            $this->school=$school;
            $this->company=$company;
            
        }

        public function __toString (){
            $stringa="";
            foreach ($this->getStudents() as $student){
                $stringa.="<br>".$student;
            }
            
            return "nome: ".$this->name."<br>"."eta': ".$this->age."<br>".
                    "email: ".$this->email."<br>"."corso: "
                    .$this->course."<br>"."studenti: ".$stringa."<br>";
        }
//            public function getCompany(){
//                return $this.company;
//            }
//            
//            public function setCompany ($company){
//                $this->company=$company;
//            }
            
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
            
                public function getStudents(){
                    $studs = [];
                    foreach ($this->school as $student){
                        foreach($student as $course){
                            if ($course===$this->course){
                                array_push($studs, $student);
                            }
                        }
                    }
                    RETURN $studs;
                }
}
