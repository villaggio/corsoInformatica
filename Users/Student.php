<?php
namespace Users;

class Student implements Person{
    
    use DigitalUser;
    
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
                $courses.="<br>".$course;
            }
            return "nome: ".$this->name."<br>"."eta': ".$this->age."<br>"."email: ".$this->email."<br>"."corsi: ".$courses."<br>"; 
        }
        
            function getCourses(){
                return $this->courses;
            }
            
            function addCourse(Course $course){
                array_push($this->courses, $course);
            }
            
            function resetCourses(){
                $this->courses=array();
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
