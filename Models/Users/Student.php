<?php
namespace Models\Users;

use Models\Table as Table;

class Student extends Table implements Person {
    
    use DigitalUser;
    
    // questa constante è necessaria per integrare questa classe con una tabella
    // sul database. Sarà utilizzato da Table.php per la connessione in lettura/scruittura
    const TABLE_NAME = "student";
    
    protected $name;
    protected $age;
    protected $courses = array();
    
    public function __construct($name="", $age="", $email="", $courses=[]){
        
        parent::init($this);
        
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->courses=$courses;
    }
    
    /**
     * Metodo richiesto per integrare l'oggetto con una tabella estendendo table.php
     * Quesyo metodo avrà lo scopo di mappare tutti le proprietà dell oggetto studente
     * con i nomi delle colonne sul database
     * @return type
     */
    static function getBindings(){
        return [
            //"nome_colonna"=>"nome_parametro",
            "id"=>"id",
            "name"=>"name",
            "age"=>"age",
            "email"=>"email",
        ];
    }

    public function __toString(){
        $courses="";
        
        $coursesArray = array_filter($this->courses, function($v){return ($v->getHours()>=250);});
        
        array_walk($coursesArray, function($v,$k)use(&$courses){$courses.="<br>".$v;});
        
//        foreach ($coursesArray as $course){
//            $courses.="<br>".$course;
//        }
        
        return "nome: ".$this->name."<br>"."eta': ".$this->age."<br>"."email: ".$this->email."<br>"."corsi: ".$courses."<br>"; 
    }

    public function getCourses(){
        return $this->courses;
    }

    public function addCourse(Course $course){
        array_push($this->courses, $course);
    }

    public function resetCourses(){
        $this->courses=array();
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
