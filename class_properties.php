<?php

// / object_vars will take an instance($instance) return the values for the instance
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
    // var or public????
}

// $student1 = first instance
$student1 = new Student;
// first_name = instance property
$student1->first_name = 'Ako';
$student1->last_name = 'K.';
$student1->country = '285-Uganda-' . "<br />";

// student 2 = second instance
$student2 = new Student;
$student2->first_name = 'Eko';
$student2->last_name = 'Peter';
$student2->age = '20';
$student2->country = '237' . "<br/>";

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

$class_vars = get_class_vars('Student');
echo "class vars:";
echo "<pre> ";
print_r($class_vars);


//displaying student1
$object_vars = get_object_vars($student1);
echo "object vars: student1";
echo "<pre> ";
print_r($object_vars);

// displaying $student2
$object_vars = get_object_vars($student2);
echo "object vars: student2";
echo "<pre> ";
print_r($object_vars);

if (property_exists('Student', 'first_name')) {
    echo " property exists";
} else {
    echo " property doesn't exist";

}