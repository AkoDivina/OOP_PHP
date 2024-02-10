<?php

// object_vars will take an instance($instance) return the values for the instance
// class_vars will take a class as a string ('student') return the values for the class
//we use the arrow notation to reference the property of atttributes
// get_class($object) gets the classes
// using the visibility modifies is better practice, if u dont use it , it is by default public
// 3 types
//  #public - for everyone and everywhere
// #protected - for class and subclasses
//  $private- only for the specific class
class Student
{
    public $first_name;
    public $last_name;
    public $employed = 'false';
    public $country = 'None';
    public $age;
    protected $stud_id;
    private $tution = '$50.00';
    
     public function hello_world(){
        return 'Hello, world' . "<br>";
     }
     protected function hello_family(){
        return 'Hello, family' . "<br>";
     }
     private function hello_me(){
        return 'Hello, me' . "<br>";
     }
     public function FullName(){
        return $this-> first_name . " " . $this-> last_name . " " . $this->age ;  
     }

     public function my_tuition(){
        return $this->tution;
     }
}
class SubStudent extends student{
    public function hello_parent(){
        echo $this -> hello_family();
    }
}

// $student1 = new Student;
$student1 = new SubStudent;
$student1->first_name = 'Divina';
$student1->last_name = 'K.';
$student1->age ='20' . "<br />";

echo $student1->FullName(). "</br/>"; 
echo $student1->hello_world() . "</br/>"; 
echo $student1 -> hello_parent() . "<br/>";
echo $student1 ->  my_tuition(). "<br/>";
// echo $student1 ->stud_id. "</br/>"; 
// echo $student1 ->tution. "</br/>"; 


// echo $student1->hello_family() .  "<br>";  
// echo $student1->hello_me() .  "<br>"; 

?>