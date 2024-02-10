<?php
/* inheritance helps
* - to reduce repetitions of codes
* - reduce inconsistency

* - reduces the amount of code
making it organised, consistent and easy to see
*/

class User
{
    var $first_name;
    var $last_name;
    var $username;

    function full_name(){
        echo $this->first_name . " " . $this ->last_name;
    }
}



class Customer extends User{
    
}


$u = new User;
$u -> first_name = 'Etta';
$u -> last_name = 'Ako';
$u -> username = 'EttAko';

$p = new Customer;
$p -> first_name = 'Tayong';
$p -> last_name = 'Shalanyuy';
$p -> username = 'Shalyong';

echo $u->full_name() . '<br/>';
echo $p->full_name() . '<br/>';

    if (is_subclass_of($u, 'user')){
    echo "instance is a subclass of user";
    }
else{
    echo 'instance is not a subclass of user' . '<br/>';
}
echo get_parent_class($u) .  "<br/>";
echo get_parent_class($p) .  "<br/>";
?>