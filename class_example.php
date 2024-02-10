<?php


class Student
{

}
$classes = get_declared_classes();
echo "Classes:" . implode(', ', $classes) . "<br/>";
//implode changes the arrays into strings || joins array elements with strings

$class_names = ['Product', 'student', 'Student']; // from the class student at the top. student is declared
//is not case sensitive because both student and Student are seen to be declared
foreach ($class_names as $class_name) {
    if (class_exists($class_name)) {
        echo "{$class_name} is a declared class . <br/> ";
    } else {
        echo "{$class_name} is not a declared class . <br/> ";
    }
}