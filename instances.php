<!-- instances in php :
instance means once , so an instance is like an object that is unique
examles of instances  -->

<?php

// get_class($object) gets the classes

class Student
{
    
}
// $student1 = new Student;
$Divina = new Student;

echo get_class($Divina) . "<br/>";

$class_names = ['Student', 'product', 'Spaghetti', 'Potato'];
foreach ($class_names as $class_name) {
    if (is_a($Divina, $class_name)) {
        // is_a($object, $string) simply means, is the object a string, or does the object have the same data type as what is on the left
        echo "Divina is a {$class_name}  . <br/> ";
    } else {
        echo "Divina is not a {$class_name}. <br/> ";
    }
}
?>