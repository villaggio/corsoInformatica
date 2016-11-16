<?php
namespace Users;

class Student implements \Iterator, Person {
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses = array();
    private $position = 0;
    
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
    
    //--------------------------------------------------------------------------
        
            public function getCourses(){
                return $this->courses;
            }
            
            public function addCourse(Course $course){
                array_push($this->courses, $course);
            }
            
            public function resetCourses(){
                $this->courses=array();
            }
            
                public function key(){
                    return $this->position;
                }
                
                public function current(){
                    return $this->courses[$this->position];
                }
                
                public function next(){
                    $this->position++;
                }
                
                public function rewind(){
                    $this->position = 0;
                }
                
                public function valid(){
                    return isset($this->courses[$this->position]) || array_key_exists($this->position, $this->courses);                   
                }
    
    //--------------------------------------------------------------------------
            
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
