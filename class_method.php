<?php

// object_vars will take an instance($instance) return the values for the instance
// class_vars will take a class as a string ('student') return the values for the class
//we use the arrow notation to reference the property of atttributes
// get_class($object) gets the classes

class Student
{
    var $first_name;
    public $last_name;
    public $employed = 'false';
    public $country = 'None';
    public $age;

    function SayHello(){
        return 'Hello,' . "<br>";
     }
     
     function FullName(){
        return $this-> first_name . " " . $this-> last_name;
        
     }

    
    // var or public????
}

// $student1 = first instance
$student1 = new Student;
// first_name = instance property
$student1->first_name = 'Divina';
$student1->last_name = 'K.';
$student1->country = '285-Uganda-' . "<br />";

// student 2 = second instance
$student2 = new Student;
$student2->first_name = 'peanut';
$student2->last_name = 'Butter';
$student2->age = '20';
$student2->country = '237' . "<br/>";

echo $student1->FullName(). "</br/>"; 
echo $student2->FullName(). "</br/>"; 

echo $student1->SayHello() . "</br/>";  
echo $student2->SayHello() .  "<br>";  


$class_methods = get_class_methods ('Student');
echo "class methods: " .  "<br>" . implode(',', $class_methods) . "<br/>";



if (method_exists('Student', 'SayHello')) {
    echo " Method SayHello() exists in Student class . <br/>";
} else {
    echo " Method SayHello() doesn't exists pin Student class . <br/>";
    


}
?>